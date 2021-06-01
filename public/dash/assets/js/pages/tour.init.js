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
/******/ 	return __webpack_require__(__webpack_require__.s = 57);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/tour.init.js":
/*!*****************************************!*\
  !*** ./resources/js/pages/tour.init.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Tour init js\n*/\n$(document).ready(function () {\n  // Define the tour!\n  var tour = {\n    id: \"my-intro\",\n    steps: [{\n      target: \"logo-tour\",\n      title: \"Logo Here\",\n      content: \"You can find here status of user who's currently online.\",\n      placement: 'bottom',\n      yOffset: 10\n    }, {\n      target: 'display-title-tour',\n      title: \"Display Text\",\n      content: \"Click on the button and make sidebar navigation small.\",\n      placement: 'top',\n      zindex: 9999\n    }, {\n      target: 'page-title-tour',\n      title: \"User settings\",\n      content: \"You can edit you profile info here.\",\n      placement: 'bottom',\n      zindex: 999\n    }, {\n      target: 'thankyou-tour',\n      title: \"Thank you !\",\n      content: \"Here you can change theme skins and other features.\",\n      placement: 'top',\n      zindex: 999\n    }],\n    showPrevButton: true\n  }; // Start the tour!\n\n  hopscotch.startTour(tour);\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvdG91ci5pbml0LmpzP2NlNWYiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJ0b3VyIiwiaWQiLCJzdGVwcyIsInRhcmdldCIsInRpdGxlIiwiY29udGVudCIsInBsYWNlbWVudCIsInlPZmZzZXQiLCJ6aW5kZXgiLCJzaG93UHJldkJ1dHRvbiIsImhvcHNjb3RjaCIsInN0YXJ0VG91ciJdLCJtYXBwaW5ncyI6IkFBQUE7Ozs7Ozs7QUFRQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFZO0FBRTFCO0FBQ0EsTUFBSUMsSUFBSSxHQUFHO0FBQ1BDLE1BQUUsRUFBRSxVQURHO0FBRVBDLFNBQUssRUFBRSxDQUNIO0FBQ0lDLFlBQU0sRUFBRSxXQURaO0FBRUlDLFdBQUssRUFBRSxXQUZYO0FBR0lDLGFBQU8sRUFBRSwwREFIYjtBQUlJQyxlQUFTLEVBQUUsUUFKZjtBQUtJQyxhQUFPLEVBQUU7QUFMYixLQURHLEVBUUg7QUFDSUosWUFBTSxFQUFFLG9CQURaO0FBRUlDLFdBQUssRUFBRSxjQUZYO0FBR0lDLGFBQU8sRUFBRSx3REFIYjtBQUlJQyxlQUFTLEVBQUUsS0FKZjtBQUtJRSxZQUFNLEVBQUU7QUFMWixLQVJHLEVBZUg7QUFDSUwsWUFBTSxFQUFFLGlCQURaO0FBRUlDLFdBQUssRUFBRSxlQUZYO0FBR0lDLGFBQU8sRUFBRSxxQ0FIYjtBQUlJQyxlQUFTLEVBQUUsUUFKZjtBQUtJRSxZQUFNLEVBQUU7QUFMWixLQWZHLEVBc0JIO0FBQ0lMLFlBQU0sRUFBRSxlQURaO0FBRUlDLFdBQUssRUFBRSxhQUZYO0FBR0lDLGFBQU8sRUFBRSxxREFIYjtBQUlJQyxlQUFTLEVBQUUsS0FKZjtBQUtJRSxZQUFNLEVBQUU7QUFMWixLQXRCRyxDQUZBO0FBZ0NQQyxrQkFBYyxFQUFFO0FBaENULEdBQVgsQ0FIMEIsQ0FzQzFCOztBQUNBQyxXQUFTLENBQUNDLFNBQVYsQ0FBb0JYLElBQXBCO0FBQ0gsQ0F4Q0QiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvdG91ci5pbml0LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLypcblRlbXBsYXRlIE5hbWU6IFVib2xkIC0gUmVzcG9uc2l2ZSBCb290c3RyYXAgNCBBZG1pbiBEYXNoYm9hcmRcbkF1dGhvcjogQ29kZXJUaGVtZXNcbldlYnNpdGU6IGh0dHBzOi8vY29kZXJ0aGVtZXMuY29tL1xuQ29udGFjdDogc3VwcG9ydEBjb2RlcnRoZW1lcy5jb21cbkZpbGU6IFRvdXIgaW5pdCBqc1xuKi9cblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xuXG4gICAgLy8gRGVmaW5lIHRoZSB0b3VyIVxuICAgIHZhciB0b3VyID0ge1xuICAgICAgICBpZDogXCJteS1pbnRyb1wiLFxuICAgICAgICBzdGVwczogW1xuICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgIHRhcmdldDogXCJsb2dvLXRvdXJcIixcbiAgICAgICAgICAgICAgICB0aXRsZTogXCJMb2dvIEhlcmVcIixcbiAgICAgICAgICAgICAgICBjb250ZW50OiBcIllvdSBjYW4gZmluZCBoZXJlIHN0YXR1cyBvZiB1c2VyIHdobydzIGN1cnJlbnRseSBvbmxpbmUuXCIsXG4gICAgICAgICAgICAgICAgcGxhY2VtZW50OiAnYm90dG9tJyxcbiAgICAgICAgICAgICAgICB5T2Zmc2V0OiAxMFxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICB0YXJnZXQ6ICdkaXNwbGF5LXRpdGxlLXRvdXInLFxuICAgICAgICAgICAgICAgIHRpdGxlOiBcIkRpc3BsYXkgVGV4dFwiLFxuICAgICAgICAgICAgICAgIGNvbnRlbnQ6IFwiQ2xpY2sgb24gdGhlIGJ1dHRvbiBhbmQgbWFrZSBzaWRlYmFyIG5hdmlnYXRpb24gc21hbGwuXCIsXG4gICAgICAgICAgICAgICAgcGxhY2VtZW50OiAndG9wJyxcbiAgICAgICAgICAgICAgICB6aW5kZXg6IDk5OTlcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgdGFyZ2V0OiAncGFnZS10aXRsZS10b3VyJyxcbiAgICAgICAgICAgICAgICB0aXRsZTogXCJVc2VyIHNldHRpbmdzXCIsXG4gICAgICAgICAgICAgICAgY29udGVudDogXCJZb3UgY2FuIGVkaXQgeW91IHByb2ZpbGUgaW5mbyBoZXJlLlwiLFxuICAgICAgICAgICAgICAgIHBsYWNlbWVudDogJ2JvdHRvbScsXG4gICAgICAgICAgICAgICAgemluZGV4OiA5OTlcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgdGFyZ2V0OiAndGhhbmt5b3UtdG91cicsXG4gICAgICAgICAgICAgICAgdGl0bGU6IFwiVGhhbmsgeW91ICFcIixcbiAgICAgICAgICAgICAgICBjb250ZW50OiBcIkhlcmUgeW91IGNhbiBjaGFuZ2UgdGhlbWUgc2tpbnMgYW5kIG90aGVyIGZlYXR1cmVzLlwiLFxuICAgICAgICAgICAgICAgIHBsYWNlbWVudDogJ3RvcCcsXG4gICAgICAgICAgICAgICAgemluZGV4OiA5OTlcbiAgICAgICAgICAgIH1cbiAgICAgICAgXSxcbiAgICAgICAgc2hvd1ByZXZCdXR0b246IHRydWVcbiAgICB9O1xuXG4gICAgLy8gU3RhcnQgdGhlIHRvdXIhXG4gICAgaG9wc2NvdGNoLnN0YXJ0VG91cih0b3VyKTtcbn0pO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/pages/tour.init.js\n");

/***/ }),

/***/ 57:
/*!***********************************************!*\
  !*** multi ./resources/js/pages/tour.init.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/tour.init.js */"./resources/js/pages/tour.init.js");


/***/ })

/******/ });