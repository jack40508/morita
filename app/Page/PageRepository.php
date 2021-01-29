<?php
    namespace App\Page;

    use Illuminate\Http\Request;
    use Auth;
    use App\Page\Page;
    use App\Page\PageBannerimage;
    use App\Page\BannerimageRepository;

    class PageRepository{

        public function __construct(Page $page,PageBannerimage $page_bannerimage,BannerimageRepository $bannerimage){
            $this->page = $page;
            $this->page_bannerimage = $page_bannerimage;
            $this->bannerimage = $bannerimage;
        }

        public function getAllPages(){

            $pages = $this->page->get();

            return $pages;
        }

        public function getNowBannerimage($page){

            $now_bannerimage = $page->bannerimages->where('pivot.start_at', '<=', date('Y-m-d'))->where('pivot.end_at', '>=', date('Y-m-d'))->where('pivot.end_at', '!=', '2119-12-31')->sortByDesc('pivot.updated_at')->sortByDesc('pivot.start_at')->first();
            if(is_null($now_bannerimage)){
                $now_bannerimage = $this->getBasicBannerimage($page);
            }

            return $now_bannerimage;
        }

        public function getBasicBannerimage($page){

            $basic_bannerimage = $page->bannerimages->where('pivot.start_at', '<=', date('Y-m-d H:i:s'))->where('pivot.end_at', '2119-12-31')->sortByDesc('pivot.updated_at')->first();

            return $basic_bannerimage;
        }

        public function getReserveBannerimage($page){

            $reserve_bannerimages = $page->bannerimages->where('pivot.start_at', '>=', date('Y-m-d H:i:s'))->sortBy('pivot.start_at')->all();

            return $reserve_bannerimages;
        }

        public function getPageByID($id){
            $page = $this->page->where('id', $id)->first();

            return $page;
        }

        public function createNewPageBannerimage($request, $page){

            $new_page_bannerimage = new PageBannerimage;

            $new_page_bannerimage->page_id = $page->id;

            switch($request->select_date){
                case 0: //general
                    break;

                case 1: //reserve
                    $new_page_bannerimage->start_at = $request->date_start;
                    break;

                case 2: //limit
                    $new_page_bannerimage->start_at = $request->date_start;
                    $new_page_bannerimage->end_at = $request->date_end;
                    break;
            }

            if(is_null($request->select_bannerimage)){
                if(!is_null($request->new_bannerimage)){
                    $new_bannerimage = $this->bannerimage->createNewBannerimage($request->new_bannerimage);
                    $new_page_bannerimage->bannerimage_id = $new_bannerimage->id;
                    $new_page_bannerimage->save();
                }
            }else{
                $new_page_bannerimage->bannerimage_id = $request->select_bannerimage;
                $new_page_bannerimage->save();
            }
        }

        public function deleteReserve($reserve_id){
            $this->page_bannerimage->where('id', $reserve_id)->delete();
        }
    }
