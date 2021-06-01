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
/******/ 	return __webpack_require__(__webpack_require__.s = 40);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/kanban.init.js":
/*!*******************************************!*\
  !*** ./resources/js/pages/kanban.init.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Kanban Board init js\n*/\n!function ($) {\n  \"use strict\";\n\n  var KanbanBoard = function KanbanBoard() {\n    this.$body = $(\"body\");\n  }; //initializing various charts and components\n\n\n  KanbanBoard.prototype.init = function () {\n    $('.tasklist').each(function () {\n      Sortable.create($(this)[0], {\n        group: 'shared',\n        animation: 150,\n        ghostClass: 'bg-ghost'\n      });\n    });\n  }, //init KanbanBoard\n  $.KanbanBoard = new KanbanBoard(), $.KanbanBoard.Constructor = KanbanBoard;\n}(window.jQuery), //initializing KanbanBoard\nfunction ($) {\n  \"use strict\";\n\n  $.KanbanBoard.init();\n}(window.jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMva2FuYmFuLmluaXQuanM/MzkwMiJdLCJuYW1lcyI6WyIkIiwiS2FuYmFuQm9hcmQiLCIkYm9keSIsInByb3RvdHlwZSIsImluaXQiLCJlYWNoIiwiU29ydGFibGUiLCJjcmVhdGUiLCJncm91cCIsImFuaW1hdGlvbiIsImdob3N0Q2xhc3MiLCJDb25zdHJ1Y3RvciIsIndpbmRvdyIsImpRdWVyeSJdLCJtYXBwaW5ncyI6IkFBQUE7Ozs7Ozs7QUFRQSxDQUFFLFVBQVNBLENBQVQsRUFBWTtBQUNiOztBQUVBLE1BQUlDLFdBQVcsR0FBRyxTQUFkQSxXQUFjLEdBQVc7QUFDNUIsU0FBS0MsS0FBTCxHQUFhRixDQUFDLENBQUMsTUFBRCxDQUFkO0FBQ0EsR0FGRCxDQUhhLENBT2I7OztBQUNBQyxhQUFXLENBQUNFLFNBQVosQ0FBc0JDLElBQXRCLEdBQTZCLFlBQVc7QUFDdkNKLEtBQUMsQ0FBQyxXQUFELENBQUQsQ0FBZUssSUFBZixDQUFvQixZQUFZO0FBQy9CQyxjQUFRLENBQUNDLE1BQVQsQ0FBZ0JQLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUSxDQUFSLENBQWhCLEVBQTRCO0FBQzNCUSxhQUFLLEVBQUUsUUFEb0I7QUFFM0JDLGlCQUFTLEVBQUUsR0FGZ0I7QUFHM0JDLGtCQUFVLEVBQUU7QUFIZSxPQUE1QjtBQU1BLEtBUEQ7QUFRQSxHQVRELEVBV0E7QUFDQVYsR0FBQyxDQUFDQyxXQUFGLEdBQWdCLElBQUlBLFdBQUosRUFaaEIsRUFZaUNELENBQUMsQ0FBQ0MsV0FBRixDQUFjVSxXQUFkLEdBQ2pDVixXQWJBO0FBZUEsQ0F2QkMsQ0F1QkFXLE1BQU0sQ0FBQ0MsTUF2QlAsQ0FBRixFQXlCQTtBQUNBLFVBQVNiLENBQVQsRUFBWTtBQUNYOztBQUNBQSxHQUFDLENBQUNDLFdBQUYsQ0FBY0csSUFBZDtBQUNBLENBSEQsQ0FHRVEsTUFBTSxDQUFDQyxNQUhULENBMUJBIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3BhZ2VzL2thbmJhbi5pbml0LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLypcblRlbXBsYXRlIE5hbWU6IFVib2xkIC0gUmVzcG9uc2l2ZSBCb290c3RyYXAgNCBBZG1pbiBEYXNoYm9hcmRcbkF1dGhvcjogQ29kZXJUaGVtZXNcbldlYnNpdGU6IGh0dHBzOi8vY29kZXJ0aGVtZXMuY29tL1xuQ29udGFjdDogc3VwcG9ydEBjb2RlcnRoZW1lcy5jb21cbkZpbGU6IEthbmJhbiBCb2FyZCBpbml0IGpzXG4qL1xuXG4hIGZ1bmN0aW9uKCQpIHtcblx0XCJ1c2Ugc3RyaWN0XCI7XG5cblx0dmFyIEthbmJhbkJvYXJkID0gZnVuY3Rpb24oKSB7XG5cdFx0dGhpcy4kYm9keSA9ICQoXCJib2R5XCIpXG5cdH07XG5cblx0Ly9pbml0aWFsaXppbmcgdmFyaW91cyBjaGFydHMgYW5kIGNvbXBvbmVudHNcblx0S2FuYmFuQm9hcmQucHJvdG90eXBlLmluaXQgPSBmdW5jdGlvbigpIHtcblx0XHQkKCcudGFza2xpc3QnKS5lYWNoKGZ1bmN0aW9uICgpIHtcblx0XHRcdFNvcnRhYmxlLmNyZWF0ZSgkKHRoaXMpWzBdLCB7XG5cdFx0XHRcdGdyb3VwOiAnc2hhcmVkJyxcblx0XHRcdFx0YW5pbWF0aW9uOiAxNTAsXG5cdFx0XHRcdGdob3N0Q2xhc3M6ICdiZy1naG9zdCdcblx0XHRcdH0pO1xuXHRcdFx0XG5cdFx0fSk7XHRcblx0fSxcblxuXHQvL2luaXQgS2FuYmFuQm9hcmRcblx0JC5LYW5iYW5Cb2FyZCA9IG5ldyBLYW5iYW5Cb2FyZCwgJC5LYW5iYW5Cb2FyZC5Db25zdHJ1Y3RvciA9XG5cdEthbmJhbkJvYXJkXG5cbn0od2luZG93LmpRdWVyeSksXG5cbi8vaW5pdGlhbGl6aW5nIEthbmJhbkJvYXJkXG5mdW5jdGlvbigkKSB7XG5cdFwidXNlIHN0cmljdFwiO1xuXHQkLkthbmJhbkJvYXJkLmluaXQoKVxufSh3aW5kb3cualF1ZXJ5KTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/pages/kanban.init.js\n");

/***/ }),

/***/ 40:
/*!*************************************************!*\
  !*** multi ./resources/js/pages/kanban.init.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/kanban.init.js */"./resources/js/pages/kanban.init.js");


/***/ })

/******/ });