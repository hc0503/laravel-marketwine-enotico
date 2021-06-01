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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/animation.init.js":
/*!**********************************************!*\
  !*** ./resources/js/pages/animation.init.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Animation demo only\n*/\nfunction testAnim(x) {\n  $('#animationSandbox').removeClass().addClass('animate__animated animate__' + x).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {\n    $(this).removeClass();\n  });\n}\n\n;\n$(document).ready(function () {\n  $('.js--triggerAnimation').click(function (e) {\n    e.preventDefault();\n    var anim = $('.js--animations').val();\n    testAnim(anim);\n  });\n  $('.js--animations').change(function () {\n    var anim = $(this).val();\n    testAnim(anim);\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvYW5pbWF0aW9uLmluaXQuanM/YmM1YSJdLCJuYW1lcyI6WyJ0ZXN0QW5pbSIsIngiLCIkIiwicmVtb3ZlQ2xhc3MiLCJhZGRDbGFzcyIsIm9uZSIsImRvY3VtZW50IiwicmVhZHkiLCJjbGljayIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImFuaW0iLCJ2YWwiLCJjaGFuZ2UiXSwibWFwcGluZ3MiOiJBQUFBOzs7Ozs7O0FBUUEsU0FBU0EsUUFBVCxDQUFrQkMsQ0FBbEIsRUFBcUI7QUFDakJDLEdBQUMsQ0FBQyxtQkFBRCxDQUFELENBQXVCQyxXQUF2QixHQUFxQ0MsUUFBckMsQ0FBOEMsZ0NBQWdDSCxDQUE5RSxFQUFpRkksR0FBakYsQ0FBcUYsOEVBQXJGLEVBQXFLLFlBQVU7QUFDM0tILEtBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUMsV0FBUjtBQUNILEdBRkQ7QUFHSDs7QUFBQTtBQUVERCxDQUFDLENBQUNJLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVU7QUFDeEJMLEdBQUMsQ0FBQyx1QkFBRCxDQUFELENBQTJCTSxLQUEzQixDQUFpQyxVQUFTQyxDQUFULEVBQVc7QUFDeENBLEtBQUMsQ0FBQ0MsY0FBRjtBQUNBLFFBQUlDLElBQUksR0FBR1QsQ0FBQyxDQUFDLGlCQUFELENBQUQsQ0FBcUJVLEdBQXJCLEVBQVg7QUFDQVosWUFBUSxDQUFDVyxJQUFELENBQVI7QUFDSCxHQUpEO0FBTUFULEdBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCVyxNQUFyQixDQUE0QixZQUFVO0FBQ2xDLFFBQUlGLElBQUksR0FBR1QsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRVSxHQUFSLEVBQVg7QUFDQVosWUFBUSxDQUFDVyxJQUFELENBQVI7QUFDSCxHQUhEO0FBSUgsQ0FYRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9wYWdlcy9hbmltYXRpb24uaW5pdC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXG5UZW1wbGF0ZSBOYW1lOiBVYm9sZCAtIFJlc3BvbnNpdmUgQm9vdHN0cmFwIDQgQWRtaW4gRGFzaGJvYXJkXG5BdXRob3I6IENvZGVyVGhlbWVzXG5XZWJzaXRlOiBodHRwczovL2NvZGVydGhlbWVzLmNvbS9cbkNvbnRhY3Q6IHN1cHBvcnRAY29kZXJ0aGVtZXMuY29tXG5GaWxlOiBBbmltYXRpb24gZGVtbyBvbmx5XG4qL1xuXG5mdW5jdGlvbiB0ZXN0QW5pbSh4KSB7XG4gICAgJCgnI2FuaW1hdGlvblNhbmRib3gnKS5yZW1vdmVDbGFzcygpLmFkZENsYXNzKCdhbmltYXRlX19hbmltYXRlZCBhbmltYXRlX18nICsgeCkub25lKCd3ZWJraXRBbmltYXRpb25FbmQgbW96QW5pbWF0aW9uRW5kIE1TQW5pbWF0aW9uRW5kIG9hbmltYXRpb25lbmQgYW5pbWF0aW9uZW5kJywgZnVuY3Rpb24oKXtcbiAgICAgICAgJCh0aGlzKS5yZW1vdmVDbGFzcygpO1xuICAgIH0pO1xufTtcblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcbiAgICAkKCcuanMtLXRyaWdnZXJBbmltYXRpb24nKS5jbGljayhmdW5jdGlvbihlKXtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB2YXIgYW5pbSA9ICQoJy5qcy0tYW5pbWF0aW9ucycpLnZhbCgpO1xuICAgICAgICB0ZXN0QW5pbShhbmltKTtcbiAgICB9KTtcblxuICAgICQoJy5qcy0tYW5pbWF0aW9ucycpLmNoYW5nZShmdW5jdGlvbigpe1xuICAgICAgICB2YXIgYW5pbSA9ICQodGhpcykudmFsKCk7XG4gICAgICAgIHRlc3RBbmltKGFuaW0pO1xuICAgIH0pO1xufSk7ICAgICJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/pages/animation.init.js\n");

/***/ }),

/***/ 1:
/*!****************************************************!*\
  !*** multi ./resources/js/pages/animation.init.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/animation.init.js */"./resources/js/pages/animation.init.js");


/***/ })

/******/ });