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
/******/ 	return __webpack_require__(__webpack_require__.s = 55);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/tickets.js":
/*!***************************************!*\
  !*** ./resources/js/pages/tickets.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Tickets init js\n*/\n$(document).ready(function () {\n  $('#tickets-table').DataTable({\n    \"language\": {\n      \"paginate\": {\n        \"previous\": \"<i class='mdi mdi-chevron-left'>\",\n        \"next\": \"<i class='mdi mdi-chevron-right'>\"\n      }\n    },\n    \"drawCallback\": function drawCallback() {\n      $('.dataTables_paginate > .pagination').addClass('pagination-rounded');\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvdGlja2V0cy5qcz9kZmUyIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiRGF0YVRhYmxlIiwiYWRkQ2xhc3MiXSwibWFwcGluZ3MiOiJBQUFBOzs7Ozs7O0FBUUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBWTtBQUMxQkYsR0FBQyxDQUFDLGdCQUFELENBQUQsQ0FBb0JHLFNBQXBCLENBQThCO0FBQzFCLGdCQUFZO0FBQ1Isa0JBQVk7QUFDUixvQkFBWSxrQ0FESjtBQUVSLGdCQUFRO0FBRkE7QUFESixLQURjO0FBTzFCLG9CQUFnQix3QkFBWTtBQUN4QkgsT0FBQyxDQUFDLG9DQUFELENBQUQsQ0FBd0NJLFFBQXhDLENBQWlELG9CQUFqRDtBQUNIO0FBVHlCLEdBQTlCO0FBV0gsQ0FaRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9wYWdlcy90aWNrZXRzLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLypcblRlbXBsYXRlIE5hbWU6IFVib2xkIC0gUmVzcG9uc2l2ZSBCb290c3RyYXAgNCBBZG1pbiBEYXNoYm9hcmRcbkF1dGhvcjogQ29kZXJUaGVtZXNcbldlYnNpdGU6IGh0dHBzOi8vY29kZXJ0aGVtZXMuY29tL1xuQ29udGFjdDogc3VwcG9ydEBjb2RlcnRoZW1lcy5jb21cbkZpbGU6IFRpY2tldHMgaW5pdCBqc1xuKi9cblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xuICAgICQoJyN0aWNrZXRzLXRhYmxlJykuRGF0YVRhYmxlKHtcbiAgICAgICAgXCJsYW5ndWFnZVwiOiB7XG4gICAgICAgICAgICBcInBhZ2luYXRlXCI6IHtcbiAgICAgICAgICAgICAgICBcInByZXZpb3VzXCI6IFwiPGkgY2xhc3M9J21kaSBtZGktY2hldnJvbi1sZWZ0Jz5cIixcbiAgICAgICAgICAgICAgICBcIm5leHRcIjogXCI8aSBjbGFzcz0nbWRpIG1kaS1jaGV2cm9uLXJpZ2h0Jz5cIlxuICAgICAgICAgICAgfVxuICAgICAgICB9LFxuICAgICAgICBcImRyYXdDYWxsYmFja1wiOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKCcuZGF0YVRhYmxlc19wYWdpbmF0ZSA+IC5wYWdpbmF0aW9uJykuYWRkQ2xhc3MoJ3BhZ2luYXRpb24tcm91bmRlZCcpO1xuICAgICAgICB9XG4gICAgfSk7XG59KTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/pages/tickets.js\n");

/***/ }),

/***/ 55:
/*!*********************************************!*\
  !*** multi ./resources/js/pages/tickets.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/tickets.js */"./resources/js/pages/tickets.js");


/***/ })

/******/ });