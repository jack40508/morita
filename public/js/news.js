/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/morita/news.js":
/*!*************************************!*\
  !*** ./resources/js/morita/news.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("Array.from(document.getElementsByClassName('a-news-page')).forEach(function (linkNewsPage) {\n  linkNewsPage.onclick = function () {\n    var page_id = parseInt(this.id.replace(/[^0-9]/ig, \"\")); //console.log(page_id);\n\n    $.ajax({\n      type: \"get\",\n      url: \"/news/page/\" + page_id,\n      data: \"\",\n      cache: false,\n      success: function success(data) {\n        $('#news-area').html(data);\n      }\n    });\n  };\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbW9yaXRhL25ld3MuanM/YzQzZSJdLCJuYW1lcyI6WyJBcnJheSIsImZyb20iLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJmb3JFYWNoIiwibGlua05ld3NQYWdlIiwib25jbGljayIsInBhZ2VfaWQiLCJwYXJzZUludCIsImlkIiwicmVwbGFjZSIsIiQiLCJhamF4IiwidHlwZSIsInVybCIsImRhdGEiLCJjYWNoZSIsInN1Y2Nlc3MiLCJodG1sIl0sIm1hcHBpbmdzIjoiQUFBQUEsS0FBSyxDQUFDQyxJQUFOLENBQVdDLFFBQVEsQ0FBQ0Msc0JBQVQsQ0FBZ0MsYUFBaEMsQ0FBWCxFQUEyREMsT0FBM0QsQ0FBbUUsVUFBU0MsWUFBVCxFQUF1QjtBQUV0RkEsY0FBWSxDQUFDQyxPQUFiLEdBQXVCLFlBQVc7QUFDOUIsUUFBSUMsT0FBTyxHQUFHQyxRQUFRLENBQUMsS0FBS0MsRUFBTCxDQUFRQyxPQUFSLENBQWdCLFVBQWhCLEVBQTJCLEVBQTNCLENBQUQsQ0FBdEIsQ0FEOEIsQ0FFOUI7O0FBRUFDLEtBQUMsQ0FBQ0MsSUFBRixDQUFPO0FBQ0hDLFVBQUksRUFBRSxLQURIO0FBRUhDLFNBQUcsRUFBRSxnQkFBZ0JQLE9BRmxCO0FBR0hRLFVBQUksRUFBRSxFQUhIO0FBSUhDLFdBQUssRUFBRSxLQUpKO0FBS0hDLGFBQU8sRUFBRSxpQkFBU0YsSUFBVCxFQUFjO0FBQ3JCSixTQUFDLENBQUMsWUFBRCxDQUFELENBQWdCTyxJQUFoQixDQUFxQkgsSUFBckI7QUFDRDtBQVBFLEtBQVA7QUFTSCxHQWJEO0FBZUgsQ0FqQkQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvbW9yaXRhL25ld3MuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJBcnJheS5mcm9tKGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ2EtbmV3cy1wYWdlJykpLmZvckVhY2goZnVuY3Rpb24obGlua05ld3NQYWdlKSB7XHJcblxyXG4gICAgbGlua05ld3NQYWdlLm9uY2xpY2sgPSBmdW5jdGlvbigpIHtcclxuICAgICAgICB2YXIgcGFnZV9pZCA9IHBhcnNlSW50KHRoaXMuaWQucmVwbGFjZSgvW14wLTldL2lnLFwiXCIpKTtcclxuICAgICAgICAvL2NvbnNvbGUubG9nKHBhZ2VfaWQpO1xyXG5cclxuICAgICAgICAkLmFqYXgoe1xyXG4gICAgICAgICAgICB0eXBlOiBcImdldFwiLFxyXG4gICAgICAgICAgICB1cmw6IFwiL25ld3MvcGFnZS9cIiArIHBhZ2VfaWQsXHJcbiAgICAgICAgICAgIGRhdGE6IFwiXCIsXHJcbiAgICAgICAgICAgIGNhY2hlOiBmYWxzZSxcclxuICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24oZGF0YSl7XHJcbiAgICAgICAgICAgICAgJCgnI25ld3MtYXJlYScpLmh0bWwoZGF0YSk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbn0pO1xyXG5cclxuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/morita/news.js\n");

/***/ }),

/***/ 2:
/*!*******************************************!*\
  !*** multi ./resources/js/morita/news.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\morita\resources\js\morita\news.js */"./resources/js/morita/news.js");


/***/ })

/******/ });