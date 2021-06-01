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
/******/ 	return __webpack_require__(__webpack_require__.s = 34);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/gallery.init.js":
/*!********************************************!*\
  !*** ./resources/js/pages/gallery.init.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Gallery init js\n*/\n$(document).ready(function () {\n  $('.image-popup').magnificPopup({\n    type: 'image',\n    closeOnContentClick: false,\n    closeBtnInside: false,\n    mainClass: 'mfp-with-zoom mfp-img-mobile',\n    image: {\n      verticalFit: true,\n      titleSrc: function titleSrc(item) {\n        return item.el.attr('title');\n      }\n    },\n    gallery: {\n      enabled: true\n    },\n    zoom: {\n      enabled: true,\n      duration: 300,\n      // don't foget to change the duration also in CSS\n      opener: function opener(element) {\n        return element.find('img');\n      }\n    }\n  });\n  $('.filter-menu .filter-menu-item').click(function () {\n    $('.filter-menu .filter-menu-item').removeClass('active');\n    $(this).addClass('active');\n  });\n  $(function () {\n    var selectedClass = \"\";\n    $(\".filter-menu-item\").click(function () {\n      selectedClass = $(this).attr(\"data-rel\");\n      $(\".filterable-content\").fadeTo(100, 0);\n      $(\".filterable-content .filter-item\").not(\".\" + selectedClass).fadeOut().removeClass('');\n      setTimeout(function () {\n        $(\".\" + selectedClass).fadeIn().addClass('');\n        $(\".filterable-content\").fadeTo(300, 1);\n      }, 300);\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvZ2FsbGVyeS5pbml0LmpzPzA2MWMiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJtYWduaWZpY1BvcHVwIiwidHlwZSIsImNsb3NlT25Db250ZW50Q2xpY2siLCJjbG9zZUJ0bkluc2lkZSIsIm1haW5DbGFzcyIsImltYWdlIiwidmVydGljYWxGaXQiLCJ0aXRsZVNyYyIsIml0ZW0iLCJlbCIsImF0dHIiLCJnYWxsZXJ5IiwiZW5hYmxlZCIsInpvb20iLCJkdXJhdGlvbiIsIm9wZW5lciIsImVsZW1lbnQiLCJmaW5kIiwiY2xpY2siLCJyZW1vdmVDbGFzcyIsImFkZENsYXNzIiwic2VsZWN0ZWRDbGFzcyIsImZhZGVUbyIsIm5vdCIsImZhZGVPdXQiLCJzZXRUaW1lb3V0IiwiZmFkZUluIl0sIm1hcHBpbmdzIjoiQUFBQTs7Ozs7OztBQVFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVc7QUFDekJGLEdBQUMsQ0FBQyxjQUFELENBQUQsQ0FBa0JHLGFBQWxCLENBQWdDO0FBQzVCQyxRQUFJLEVBQUUsT0FEc0I7QUFFNUJDLHVCQUFtQixFQUFFLEtBRk87QUFHNUJDLGtCQUFjLEVBQUUsS0FIWTtBQUk1QkMsYUFBUyxFQUFFLDhCQUppQjtBQUs1QkMsU0FBSyxFQUFFO0FBQ0hDLGlCQUFXLEVBQUUsSUFEVjtBQUVIQyxjQUFRLEVBQUUsa0JBQVNDLElBQVQsRUFBZTtBQUNyQixlQUFPQSxJQUFJLENBQUNDLEVBQUwsQ0FBUUMsSUFBUixDQUFhLE9BQWIsQ0FBUDtBQUNIO0FBSkUsS0FMcUI7QUFXNUJDLFdBQU8sRUFBRTtBQUNMQyxhQUFPLEVBQUU7QUFESixLQVhtQjtBQWM1QkMsUUFBSSxFQUFFO0FBQ0ZELGFBQU8sRUFBRSxJQURQO0FBRUZFLGNBQVEsRUFBRSxHQUZSO0FBRWE7QUFDZkMsWUFBTSxFQUFFLGdCQUFTQyxPQUFULEVBQWtCO0FBQ3RCLGVBQU9BLE9BQU8sQ0FBQ0MsSUFBUixDQUFhLEtBQWIsQ0FBUDtBQUNIO0FBTEM7QUFkc0IsR0FBaEM7QUF1QkFwQixHQUFDLENBQUMsZ0NBQUQsQ0FBRCxDQUFvQ3FCLEtBQXBDLENBQTBDLFlBQVc7QUFDakRyQixLQUFDLENBQUMsZ0NBQUQsQ0FBRCxDQUFvQ3NCLFdBQXBDLENBQWdELFFBQWhEO0FBQ0F0QixLQUFDLENBQUMsSUFBRCxDQUFELENBQVF1QixRQUFSLENBQWlCLFFBQWpCO0FBQ0gsR0FIRDtBQUtBdkIsR0FBQyxDQUFDLFlBQVk7QUFDVixRQUFJd0IsYUFBYSxHQUFHLEVBQXBCO0FBQ0F4QixLQUFDLENBQUMsbUJBQUQsQ0FBRCxDQUF1QnFCLEtBQXZCLENBQTZCLFlBQVk7QUFDckNHLG1CQUFhLEdBQUd4QixDQUFDLENBQUMsSUFBRCxDQUFELENBQVFhLElBQVIsQ0FBYSxVQUFiLENBQWhCO0FBQ0FiLE9BQUMsQ0FBQyxxQkFBRCxDQUFELENBQXlCeUIsTUFBekIsQ0FBZ0MsR0FBaEMsRUFBcUMsQ0FBckM7QUFDQXpCLE9BQUMsQ0FBQyxrQ0FBRCxDQUFELENBQXNDMEIsR0FBdEMsQ0FBMEMsTUFBTUYsYUFBaEQsRUFBK0RHLE9BQS9ELEdBQXlFTCxXQUF6RSxDQUFxRixFQUFyRjtBQUNBTSxnQkFBVSxDQUFDLFlBQVk7QUFDbkI1QixTQUFDLENBQUMsTUFBTXdCLGFBQVAsQ0FBRCxDQUF1QkssTUFBdkIsR0FBZ0NOLFFBQWhDLENBQXlDLEVBQXpDO0FBQ0F2QixTQUFDLENBQUMscUJBQUQsQ0FBRCxDQUF5QnlCLE1BQXpCLENBQWdDLEdBQWhDLEVBQXFDLENBQXJDO0FBQ0gsT0FIUyxFQUdQLEdBSE8sQ0FBVjtBQUlILEtBUkQ7QUFTSCxHQVhBLENBQUQ7QUFZSCxDQXpDRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9wYWdlcy9nYWxsZXJ5LmluaXQuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKlxuVGVtcGxhdGUgTmFtZTogVWJvbGQgLSBSZXNwb25zaXZlIEJvb3RzdHJhcCA0IEFkbWluIERhc2hib2FyZFxuQXV0aG9yOiBDb2RlclRoZW1lc1xuV2Vic2l0ZTogaHR0cHM6Ly9jb2RlcnRoZW1lcy5jb20vXG5Db250YWN0OiBzdXBwb3J0QGNvZGVydGhlbWVzLmNvbVxuRmlsZTogR2FsbGVyeSBpbml0IGpzXG4qL1xuXG4kKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcbiAgICAkKCcuaW1hZ2UtcG9wdXAnKS5tYWduaWZpY1BvcHVwKHtcbiAgICAgICAgdHlwZTogJ2ltYWdlJyxcbiAgICAgICAgY2xvc2VPbkNvbnRlbnRDbGljazogZmFsc2UsXG4gICAgICAgIGNsb3NlQnRuSW5zaWRlOiBmYWxzZSxcbiAgICAgICAgbWFpbkNsYXNzOiAnbWZwLXdpdGgtem9vbSBtZnAtaW1nLW1vYmlsZScsXG4gICAgICAgIGltYWdlOiB7XG4gICAgICAgICAgICB2ZXJ0aWNhbEZpdDogdHJ1ZSxcbiAgICAgICAgICAgIHRpdGxlU3JjOiBmdW5jdGlvbihpdGVtKSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuIGl0ZW0uZWwuYXR0cigndGl0bGUnKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSxcbiAgICAgICAgZ2FsbGVyeToge1xuICAgICAgICAgICAgZW5hYmxlZDogdHJ1ZVxuICAgICAgICB9LFxuICAgICAgICB6b29tOiB7XG4gICAgICAgICAgICBlbmFibGVkOiB0cnVlLFxuICAgICAgICAgICAgZHVyYXRpb246IDMwMCwgLy8gZG9uJ3QgZm9nZXQgdG8gY2hhbmdlIHRoZSBkdXJhdGlvbiBhbHNvIGluIENTU1xuICAgICAgICAgICAgb3BlbmVyOiBmdW5jdGlvbihlbGVtZW50KSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuIGVsZW1lbnQuZmluZCgnaW1nJyk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICB9KTtcblxuICAgICQoJy5maWx0ZXItbWVudSAuZmlsdGVyLW1lbnUtaXRlbScpLmNsaWNrKGZ1bmN0aW9uKCkge1xuICAgICAgICAkKCcuZmlsdGVyLW1lbnUgLmZpbHRlci1tZW51LWl0ZW0nKS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XG4gICAgICAgICQodGhpcykuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xuICAgIH0pO1xuXG4gICAgJChmdW5jdGlvbiAoKSB7XG4gICAgICAgIHZhciBzZWxlY3RlZENsYXNzID0gXCJcIjtcbiAgICAgICAgJChcIi5maWx0ZXItbWVudS1pdGVtXCIpLmNsaWNrKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIHNlbGVjdGVkQ2xhc3MgPSAkKHRoaXMpLmF0dHIoXCJkYXRhLXJlbFwiKTtcbiAgICAgICAgICAgICQoXCIuZmlsdGVyYWJsZS1jb250ZW50XCIpLmZhZGVUbygxMDAsIDApO1xuICAgICAgICAgICAgJChcIi5maWx0ZXJhYmxlLWNvbnRlbnQgLmZpbHRlci1pdGVtXCIpLm5vdChcIi5cIiArIHNlbGVjdGVkQ2xhc3MpLmZhZGVPdXQoKS5yZW1vdmVDbGFzcygnJyk7XG4gICAgICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICAkKFwiLlwiICsgc2VsZWN0ZWRDbGFzcykuZmFkZUluKCkuYWRkQ2xhc3MoJycpO1xuICAgICAgICAgICAgICAgICQoXCIuZmlsdGVyYWJsZS1jb250ZW50XCIpLmZhZGVUbygzMDAsIDEpO1xuICAgICAgICAgICAgfSwgMzAwKTtcbiAgICAgICAgfSk7XG4gICAgfSk7XG59KTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/pages/gallery.init.js\n");

/***/ }),

/***/ 34:
/*!**************************************************!*\
  !*** multi ./resources/js/pages/gallery.init.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/gallery.init.js */"./resources/js/pages/gallery.init.js");


/***/ })

/******/ });