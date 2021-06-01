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
/******/ 	return __webpack_require__(__webpack_require__.s = 48);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/range-sliders.init.js":
/*!**************************************************!*\
  !*** ./resources/js/pages/range-sliders.init.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Range sliders init js\n*/\n$(document).ready(function () {\n  $(\"#range_01\").ionRangeSlider();\n  $(\"#range_02\").ionRangeSlider({\n    min: 100,\n    max: 1000,\n    from: 550\n  });\n  $(\"#range_03\").ionRangeSlider({\n    type: \"double\",\n    grid: true,\n    min: 0,\n    max: 1000,\n    from: 200,\n    to: 800,\n    prefix: \"$\"\n  });\n  $(\"#range_04\").ionRangeSlider({\n    type: \"double\",\n    grid: true,\n    min: -1000,\n    max: 1000,\n    from: -500,\n    to: 500\n  });\n  $(\"#range_05\").ionRangeSlider({\n    type: \"double\",\n    grid: true,\n    min: -1000,\n    max: 1000,\n    from: -500,\n    to: 500,\n    step: 250\n  });\n  $(\"#range_06\").ionRangeSlider({\n    grid: true,\n    from: 3,\n    values: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\", \"August\", \"September\", \"October\", \"November\", \"December\"]\n  });\n  $(\"#range_07\").ionRangeSlider({\n    grid: true,\n    min: 1000,\n    max: 1000000,\n    from: 200000,\n    step: 1000,\n    prettify_enabled: true\n  });\n  $(\"#range_08\").ionRangeSlider({\n    min: 100,\n    max: 1000,\n    from: 550,\n    disable: true\n  });\n  $(\"#range_09\").ionRangeSlider({\n    grid: true,\n    min: 18,\n    max: 70,\n    from: 30,\n    prefix: \"Age \",\n    max_postfix: \"+\"\n  });\n  $(\"#range_10\").ionRangeSlider({\n    type: \"double\",\n    min: 100,\n    max: 200,\n    from: 145,\n    to: 155,\n    prefix: \"Weight: \",\n    postfix: \" million pounds\",\n    decorate_both: true\n  });\n  $(\"#range_11\").ionRangeSlider({\n    type: \"single\",\n    grid: true,\n    min: -90,\n    max: 90,\n    from: 0,\n    postfix: \"Â°\"\n  });\n  $(\"#range_12\").ionRangeSlider({\n    type: \"double\",\n    min: 1000,\n    max: 2000,\n    from: 1200,\n    to: 1800,\n    hide_min_max: true,\n    hide_from_to: true,\n    grid: true\n  });\n  $(\"#range_13\").ionRangeSlider({\n    skin: \"modern\"\n  });\n  $(\"#range_14\").ionRangeSlider({\n    skin: \"sharp\"\n  });\n  $(\"#range_15\").ionRangeSlider({\n    skin: \"round\"\n  });\n  $(\"#range_16\").ionRangeSlider({\n    skin: \"square\"\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvcmFuZ2Utc2xpZGVycy5pbml0LmpzPzRmMjMiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJpb25SYW5nZVNsaWRlciIsIm1pbiIsIm1heCIsImZyb20iLCJ0eXBlIiwiZ3JpZCIsInRvIiwicHJlZml4Iiwic3RlcCIsInZhbHVlcyIsInByZXR0aWZ5X2VuYWJsZWQiLCJkaXNhYmxlIiwibWF4X3Bvc3RmaXgiLCJwb3N0Zml4IiwiZGVjb3JhdGVfYm90aCIsImhpZGVfbWluX21heCIsImhpZGVfZnJvbV90byIsInNraW4iXSwibWFwcGluZ3MiOiJBQUFBOzs7Ozs7O0FBUUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBWTtBQUMxQkYsR0FBQyxDQUFDLFdBQUQsQ0FBRCxDQUFlRyxjQUFmO0FBRUFILEdBQUMsQ0FBQyxXQUFELENBQUQsQ0FBZUcsY0FBZixDQUE4QjtBQUMxQkMsT0FBRyxFQUFFLEdBRHFCO0FBRTFCQyxPQUFHLEVBQUUsSUFGcUI7QUFHMUJDLFFBQUksRUFBRTtBQUhvQixHQUE5QjtBQU1BTixHQUFDLENBQUMsV0FBRCxDQUFELENBQWVHLGNBQWYsQ0FBOEI7QUFDMUJJLFFBQUksRUFBRSxRQURvQjtBQUUxQkMsUUFBSSxFQUFFLElBRm9CO0FBRzFCSixPQUFHLEVBQUUsQ0FIcUI7QUFJMUJDLE9BQUcsRUFBRSxJQUpxQjtBQUsxQkMsUUFBSSxFQUFFLEdBTG9CO0FBTTFCRyxNQUFFLEVBQUUsR0FOc0I7QUFPMUJDLFVBQU0sRUFBRTtBQVBrQixHQUE5QjtBQVVBVixHQUFDLENBQUMsV0FBRCxDQUFELENBQWVHLGNBQWYsQ0FBOEI7QUFDMUJJLFFBQUksRUFBRSxRQURvQjtBQUUxQkMsUUFBSSxFQUFFLElBRm9CO0FBRzFCSixPQUFHLEVBQUUsQ0FBQyxJQUhvQjtBQUkxQkMsT0FBRyxFQUFFLElBSnFCO0FBSzFCQyxRQUFJLEVBQUUs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Y0FBZixDQUE4QjtBQUMxQmlCLFFBQUksRUFBRTtBQURvQixHQUE5QjtBQUlBcEIsR0FBQyxDQUFDLFdBQUQsQ0FBRCxDQUFlRyxjQUFmLENBQThCO0FBQzFCaUIsUUFBSSxFQUFFO0FBRG9CLEdBQTlCO0FBSUFwQixHQUFDLENBQUMsV0FBRCxDQUFELENBQWVHLGNBQWYsQ0FBOEI7QUFDMUJpQixRQUFJLEVBQUU7QUFEb0IsR0FBOUI7QUFHSCxDQS9HRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9wYWdlcy9yYW5nZS1zbGlkZXJzLmluaXQuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKlxuVGVtcGxhdGUgTmFtZTogVWJvbGQgLSBSZXNwb25zaXZlIEJvb3RzdHJhcCA0IEFkbWluIERhc2hib2FyZFxuQXV0aG9yOiBDb2RlclRoZW1lc1xuV2Vic2l0ZTogaHR0cHM6Ly9jb2RlcnRoZW1lcy5jb20vXG5Db250YWN0OiBzdXBwb3J0QGNvZGVydGhlbWVzLmNvbVxuRmlsZTogUmFuZ2Ugc2xpZGVycyBpbml0IGpzXG4qL1xuXG4kKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbiAoKSB7XG4gICAgJChcIiNyYW5nZV8wMVwiKS5pb25SYW5nZVNsaWRlcigpO1xuICAgIFxuICAgICQoXCIjcmFuZ2VfMDJcIikuaW9uUmFuZ2VTbGlkZXIoe1xuICAgICAgICBtaW46IDEwMCxcbiAgICAgICAgbWF4OiAxMDAwLFxuICAgICAgICBmcm9tOiA1NTBcbiAgICB9KTtcbiAgICBcbiAgICAkKFwiI3JhbmdlXzAzXCIpLmlvblJhbmdlU2xpZGVyKHtcbiAgICAgICAgdHlwZTogXCJkb3VibGVcIixcbiAgICAgICAgZ3JpZDogdHJ1ZSxcbiAgICAgICAgbWluOiAwLFxuICAgICAgICBtYXg6IDEwMDAsXG4gICAgICAgIGZyb206IDIwMCxcbiAgICAgICAgdG86IDgwMCxcbiAgICAgICAgcHJlZml4OiBcIiRcIlxuICAgIH0pO1xuICAgXG4gICAgJChcIiNyYW5nZV8wNFwiKS5pb25SYW5nZVNsaWRlcih7XG4gICAgICAgIHR5cGU6IFwiZG91YmxlXCIsXG4gICAgICAgIGdyaWQ6IHRydWUsXG4gICAgICAgIG1pbjogLTEwMDAsXG4gICAgICAgIG1heDogMTAwMCxcbiAgICAgICAgZnJvbTogLTUwMCxcbiAgICAgICAgdG86IDUwMFxuICAgIH0pO1xuICAgIFxuICAgICQoXCIjcmFuZ2VfMDVcIikuaW9uUmFuZ2VTbGlkZXIoe1xuICAgICAgICB0eXBlOiBcImRvdWJsZVwiLFxuICAgICAgICBncmlkOiB0cnVlLFxuICAgICAgICBtaW46IC0xMDAwLFxuICAgICAgICBtYXg6IDEwMDAsXG4gICAgICAgIGZyb206IC01MDAsXG4gICAgICAgIHRvOiA1MDAsXG4gICAgICAgIHN0ZXA6IDI1MFxuICAgIH0pO1xuICAgIFxuICAgICQoXCIjcmFuZ2VfMDZcIikuaW9uUmFuZ2VTbGlkZXIoe1xuICAgICAgICBncmlkOiB0cnVlLFxuICAgICAgICBmcm9tOiAzLFxuICAgICAgICB2YWx1ZXM6IFtcIkphbnVhcnlcIiwgXCJGZWJydWFyeVwiLCBcIk1hcmNoXCIsIFwiQXByaWxcIiwgXCJNYXlcIiwgXCJKdW5lXCIsIFwiSnVseVwiLCBcIkF1Z3VzdFwiLCBcIlNlcHRlbWJlclwiLCBcIk9jdG9iZXJcIiwgXCJOb3ZlbWJlclwiLCBcIkRlY2VtYmVyXCJdXG4gICAgfSk7XG4gICAgXG4gICAgJChcIiNyYW5nZV8wN1wiKS5pb25SYW5nZVNsaWRlcih7XG4gICAgICAgIGdyaWQ6IHRydWUsXG4gICAgICAgIG1pbjogMTAwMCxcbiAgICAgICAgbWF4OiAxMDAwMDAwLFxuICAgICAgICBmcm9tOiAyMDAwMDAsXG4gICAgICAgIHN0ZXA6IDEwMDAsXG4gICAgICAgIHByZXR0aWZ5X2VuYWJsZWQ6IHRydWVcbiAgICB9KTtcbiAgICBcbiAgICAkKFwiI3JhbmdlXzA4XCIpLmlvblJhbmdlU2xpZGVyKHtcbiAgICAgICAgbWluOiAxMDAsXG4gICAgICAgIG1heDogMTAwMCxcbiAgICAgICAgZnJvbTogNTUwLFxuICAgICAgICBkaXNhYmxlOiB0cnVlXG4gICAgfSk7XG4gICAgJChcIiNyYW5nZV8wOVwiKS5pb25SYW5nZVNsaWRlcih7XG4gICAgICAgIGdyaWQ6IHRydWUsXG4gICAgICAgIG1pbjogMTgsXG4gICAgICAgIG1heDogNzAsXG4gICAgICAgIGZyb206IDMwLFxuICAgICAgICBwcmVmaXg6IFwiQWdlIFwiLFxuICAgICAgICBtYXhfcG9zdGZpeDogXCIrXCJcbiAgICB9KTtcbiAgICAkKFwiI3JhbmdlXzEwXCIpLmlvblJhbmdlU2xpZGVyKHtcbiAgICAgICAgdHlwZTogXCJkb3VibGVcIixcbiAgICAgICAgbWluOiAxMDAsXG4gICAgICAgIG1heDogMjAwLFxuICAgICAgICBmcm9tOiAxNDUsXG4gICAgICAgIHRvOiAxNTUsXG4gICAgICAgIHByZWZpeDogXCJXZWlnaHQ6IFwiLFxuICAgICAgICBwb3N0Zml4OiBcIiBtaWxsaW9uIHBvdW5kc1wiLFxuICAgICAgICBkZWNvcmF0ZV9ib3RoOiB0cnVlXG4gICAgfSk7XG4gICAgJChcIiNyYW5nZV8xMVwiKS5pb25SYW5nZVNsaWRlcih7XG4gICAgICAgIHR5cGU6IFwic2luZ2xlXCIsXG4gICAgICAgIGdyaWQ6IHRydWUsXG4gICAgICAgIG1pbjogLTkwLFxuICAgICAgICBtYXg6IDkwLFxuICAgICAgICBmcm9tOiAwLFxuICAgICAgICBwb3N0Zml4OiBcIsOCwrBcIlxuICAgIH0pO1xuICAgICQoXCIjcmFuZ2VfMTJcIikuaW9uUmFuZ2VTbGlkZXIoe1xuICAgICAgICB0eXBlOiBcImRvdWJsZVwiLFxuICAgICAgICBtaW46IDEwMDAsXG4gICAgICAgIG1heDogMjAwMCxcbiAgICAgICAgZnJvbTogMTIwMCxcbiAgICAgICAgdG86IDE4MDAsXG4gICAgICAgIGhpZGVfbWluX21heDogdHJ1ZSxcbiAgICAgICAgaGlkZV9mcm9tX3RvOiB0cnVlLFxuICAgICAgICBncmlkOiB0cnVlXG4gICAgfSk7XG5cbiAgICAkKFwiI3JhbmdlXzEzXCIpLmlvblJhbmdlU2xpZGVyKHtcbiAgICAgICAgc2tpbjogXCJtb2Rlcm5cIlxuICAgIH0pO1xuXG4gICAgJChcIiNyYW5nZV8xNFwiKS5pb25SYW5nZVNsaWRlcih7XG4gICAgICAgIHNraW46IFwic2hhcnBcIlxuICAgIH0pO1xuXG4gICAgJChcIiNyYW5nZV8xNVwiKS5pb25SYW5nZVNsaWRlcih7XG4gICAgICAgIHNraW46IFwicm91bmRcIlxuICAgIH0pO1xuXG4gICAgJChcIiNyYW5nZV8xNlwiKS5pb25SYW5nZVNsaWRlcih7XG4gICAgICAgIHNraW46IFwic3F1YXJlXCJcbiAgICB9KTtcbn0pOyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/pages/range-sliders.init.js\n");

/***/ }),

/***/ 48:
/*!********************************************************!*\
  !*** multi ./resources/js/pages/range-sliders.init.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/range-sliders.init.js */"./resources/js/pages/range-sliders.init.js");


/***/ })

/******/ });