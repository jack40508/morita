<?php
    namespace App\Page;

    use Illuminate\Http\Request;
    use Auth;
    use App\Page\Bannerimage;

    class BannerimageRepository{

        public function __construct(Bannerimage $bannerimage){
            $this->bannerimage = $bannerimage;
        }

        public function getAllBannerimages(){

            $bannerimages = $this->bannerimage->get();

            return $bannerimages;
        }

        public function createNewBannerimage($img){

            $new_bannerimage = new Bannerimage;

            $new_bannerimage->save();

            //Product Img Save
            $bannerimage_file = $img;
            $bannerimage_path = $img->path();
            $bannerimage_extension = $img->extension();
            $bannerimage_filename = 'banner_'.$new_bannerimage->id.'.jpg';
            $bannerimage_upload_success = $bannerimage_file->move('img/banner', $bannerimage_filename, $bannerimage_extension);

            return $new_bannerimage;
        }
    }
