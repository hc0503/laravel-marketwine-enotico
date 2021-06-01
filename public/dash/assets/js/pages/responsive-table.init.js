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
/******/ 	return __webpack_require__(__webpack_require__.s = 49);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/responsive-table.init.js":
/*!*****************************************************!*\
  !*** ./resources/js/pages/responsive-table.init.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Responsive table init js\n*/\n!function ($) {\n  \"use strict\";\n\n  var ResponsiveTable = function ResponsiveTable() {};\n\n  ResponsiveTable.prototype.init = function () {\n    $('.table-rep-plugin').responsiveTable('update');\n  }, $.ResponsiveTable = new ResponsiveTable(), $.ResponsiveTable.Constructor = ResponsiveTable;\n}(window.jQuery), //initializing \nfunction ($) {\n  \"use strict\";\n\n  $.ResponsiveTable.init();\n}(window.jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvcmVzcG9uc2l2ZS10YWJsZS5pbml0LmpzP2JlYjAiXSwibmFtZXMiOlsiJCIsIlJlc3BvbnNpdmVUYWJsZSIsInByb3RvdHlwZSIsImluaXQiLCJyZXNwb25zaXZlVGFibGUiLCJDb25zdHJ1Y3RvciIsIndpbmRvdyIsImpRdWVyeSJdLCJtYXBwaW5ncyI6IkFBQUE7Ozs7Ozs7QUFRQSxDQUFDLFVBQVNBLENBQVQsRUFBWTtBQUNUOztBQUVBLE1BQUlDLGVBQWUsR0FBRyxTQUFsQkEsZUFBa0IsR0FBVyxDQUFFLENBQW5DOztBQUVBQSxpQkFBZSxDQUFDQyxTQUFoQixDQUEwQkMsSUFBMUIsR0FBaUMsWUFBWTtBQUN6Q0gsS0FBQyxDQUFDLG1CQUFELENBQUQsQ0FBdUJJLGVBQXZCLENBQXVDLFFBQXZDO0FBQ0gsR0FGRCxFQUdBSixDQUFDLENBQUNDLGVBQUYsR0FBb0IsSUFBSUEsZUFBSixFQUhwQixFQUd5Q0QsQ0FBQyxDQUFDQyxlQUFGLENBQWtCSSxXQUFsQixHQUFnQ0osZUFIekU7QUFLSCxDQVZBLENBVUNLLE1BQU0sQ0FBQ0MsTUFWUixDQUFELEVBWUE7QUFDQSxVQUFTUCxDQUFULEVBQVk7QUFDUjs7QUFDQUEsR0FBQyxDQUFDQyxlQUFGLENBQWtCRSxJQUFsQjtBQUNILENBSEQsQ0FHRUcsTUFBTSxDQUFDQyxNQUhULENBYkEiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvcmVzcG9uc2l2ZS10YWJsZS5pbml0LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLypcblRlbXBsYXRlIE5hbWU6IFVib2xkIC0gUmVzcG9uc2l2ZSBCb290c3RyYXAgNCBBZG1pbiBEYXNoYm9hcmRcbkF1dGhvcjogQ29kZXJUaGVtZXNcbldlYnNpdGU6IGh0dHBzOi8vY29kZXJ0aGVtZXMuY29tL1xuQ29udGFjdDogc3VwcG9ydEBjb2RlcnRoZW1lcy5jb21cbkZpbGU6IFJlc3BvbnNpdmUgdGFibGUgaW5pdCBqc1xuKi9cblxuIWZ1bmN0aW9uKCQpIHtcbiAgICBcInVzZSBzdHJpY3RcIjtcblxuICAgIHZhciBSZXNwb25zaXZlVGFibGUgPSBmdW5jdGlvbigpIHt9O1xuXG4gICAgUmVzcG9uc2l2ZVRhYmxlLnByb3RvdHlwZS5pbml0ID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAkKCcudGFibGUtcmVwLXBsdWdpbicpLnJlc3BvbnNpdmVUYWJsZSgndXBkYXRlJyk7XG4gICAgfSxcbiAgICAkLlJlc3BvbnNpdmVUYWJsZSA9IG5ldyBSZXNwb25zaXZlVGFibGUsICQuUmVzcG9uc2l2ZVRhYmxlLkNvbnN0cnVjdG9yID0gUmVzcG9uc2l2ZVRhYmxlXG5cbn0od2luZG93LmpRdWVyeSksXG5cbi8vaW5pdGlhbGl6aW5nIFxuZnVuY3Rpb24oJCkge1xuICAgIFwidXNlIHN0cmljdFwiO1xuICAgICQuUmVzcG9uc2l2ZVRhYmxlLmluaXQoKVxufSh3aW5kb3cualF1ZXJ5KTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/pages/responsive-table.init.js\n");

/***/ }),

/***/ 49:
/*!***********************************************************!*\
  !*** multi ./resources/js/pages/responsive-table.init.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/responsive-table.init.js */"./resources/js/pages/responsive-table.init.js");


/***/ })

/******/ });