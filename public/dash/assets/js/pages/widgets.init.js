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
/******/ 	return __webpack_require__(__webpack_require__.s = 60);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/widgets.init.js":
/*!********************************************!*\
  !*** ./resources/js/pages/widgets.init.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Widgets init js\n*/\n$(document).ready(function () {\n  var DrawSparkline = function DrawSparkline() {\n    // Line Chart\n    var colors = ['#00acc1', '#f1556c'];\n    var dataColors = $(\"#lifetime-sales\").data('colors');\n\n    if (dataColors) {\n      colors = dataColors.split(\",\");\n    }\n\n    $('#lifetime-sales').sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40], {\n      type: 'line',\n      width: \"100%\",\n      height: '220',\n      chartRangeMax: 50,\n      lineColor: colors[0],\n      fillColor: hexToRGB(colors[0], 0.3),\n      highlightLineColor: 'rgba(0,0,0,.1)',\n      highlightSpotColor: 'rgba(0,0,0,.2)',\n      maxSpotColor: false,\n      minSpotColor: false,\n      spotColor: false,\n      lineWidth: 1\n    });\n    $('#lifetime-sales').sparkline([25, 23, 26, 24, 25, 32, 30, 24, 19], {\n      type: 'line',\n      width: \"100%\",\n      height: '220',\n      chartRangeMax: 40,\n      lineColor: colors[1],\n      fillColor: hexToRGB(colors[1], 0.3),\n      composite: true,\n      highlightLineColor: 'rgba(0,0,0,.1)',\n      highlightSpotColor: 'rgba(0,0,0,.2)',\n      maxSpotColor: false,\n      minSpotColor: false,\n      spotColor: false,\n      lineWidth: 1\n    }); // Bar Chart\n\n    var colors = ['#00acc1'];\n    var dataColors = $(\"#income-amounts\").data('colors');\n\n    if (dataColors) {\n      colors = dataColors.split(\",\");\n    }\n\n    $('#income-amounts').sparkline([3, 6, 7, 8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {\n      type: 'bar',\n      height: '220',\n      barWidth: '10',\n      barSpacing: '3',\n      barColor: colors\n    }); // Pie Chart\n\n    var colors = ['#00acc1', '#4b88e4', '#e3eaef', '#fd7e14'];\n    var dataColors = $(\"#total-users\").data('colors');\n\n    if (dataColors) {\n      colors = dataColors.split(\",\");\n    }\n\n    $('#total-users').sparkline([20, 40, 30, 10], {\n      type: 'pie',\n      width: '220',\n      height: '220',\n      sliceColors: colors\n    });\n  };\n\n  DrawSparkline();\n  var resizeChart;\n  $(window).resize(function (e) {\n    clearTimeout(resizeChart);\n    resizeChart = setTimeout(function () {\n      DrawSparkline();\n    }, 300);\n  });\n});\n/* utility function */\n\nfunction hexToRGB(hex, alpha) {\n  var r = parseInt(hex.slice(1, 3), 16),\n      g = parseInt(hex.slice(3, 5), 16),\n      b = parseInt(hex.slice(5, 7), 16);\n\n  if (alpha) {\n    return \"rgba(\" + r + \", \" + g + \", \" + b + \", \" + alpha + \")\";\n  } else {\n    return \"rgb(\" + r + \", \" + g + \", \" + b + \")\";\n  }\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvd2lkZ2V0cy5pbml0LmpzP2I5YzkiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJEcmF3U3BhcmtsaW5lIiwiY29sb3JzIiwiZGF0YUNvbG9ycyIsImRhdGEiLCJzcGxpdCIsInNwYXJrbGluZSIsInR5cGUiLCJ3aWR0aCIsImhlaWdodCIsImNoYXJ0UmFuZ2VNYXgiLCJsaW5lQ29sb3IiLCJmaWxsQ29sb3IiLCJoZXhUb1JHQiIsImhpZ2hsaWdodExpbmVDb2xvciIsImhpZ2hsaWdodFNwb3RDb2xvciIsIm1heFNwb3RDb2xvciIsIm1pblNwb3RDb2xvciIsInNwb3RDb2xvciIsImxpbmVXaWR0aCIsImNvbXBvc2l0ZSIsImJhcldpZHRoIiwiYmFyU3BhY2luZyIsImJhckNvbG9yIiwic2xpY2VDb2xvcnMiLCJyZXNpemVDaGFydCIsIndpbmRvdyIsInJlc2l6ZSIsImUiLCJjbGVhclRpbWVvdXQiLCJzZXRUaW1lb3V0IiwiaGV4IiwiYWxwaGEiLCJyIiwicGFyc2VJbnQiLCJzbGljZSIsImciLCJiIl0sIm1hcHBpbmdzIjoiQUFBQTs7Ozs7OztBQU9BQSxDQUFDLENBQUVDLFFBQUYsQ0FBRCxDQUFjQyxLQUFkLENBQW9CLFlBQVc7QUFFM0IsTUFBSUMsYUFBYSxHQUFHLFNBQWhCQSxhQUFnQixHQUFXO0FBQzNCO0FBQ0EsUUFBSUMsTUFBTSxHQUFHLENBQUMsU0FBRCxFQUFZLFNBQVosQ0FBYjtBQUNBLFFBQUlDLFVBQVUsR0FBR0wsQ0FBQyxDQUFDLGlCQUFELENBQUQsQ0FBcUJNLElBQXJCLENBQTBCLFFBQTFCLENBQWpCOztBQUNBLFFBQUlELFVBQUosRUFBZ0I7QUFDWkQsWUFBTSxHQUFHQyxVQUFVLENBQUNFLEtBQVgsQ0FBaUIsR0FBakIsQ0FBVDtBQUNIOztBQUNEUCxLQUFDLENBQUMsaUJBQUQsQ0FBRCxDQUFxQlEsU0FBckIsQ0FBK0IsQ0FBQyxDQUFELEVBQUksRUFB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Q0FBVCxHQUFhLElBQWIsR0FBb0JHLENBQXBCLEdBQXdCLElBQXhCLEdBQStCQyxDQUEvQixHQUFtQyxHQUExQztBQUNIO0FBQ0oiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvd2lkZ2V0cy5pbml0LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLypcblRlbXBsYXRlIE5hbWU6IFVib2xkIC0gUmVzcG9uc2l2ZSBCb290c3RyYXAgNCBBZG1pbiBEYXNoYm9hcmRcbkF1dGhvcjogQ29kZXJUaGVtZXNcbldlYnNpdGU6IGh0dHBzOi8vY29kZXJ0aGVtZXMuY29tL1xuQ29udGFjdDogc3VwcG9ydEBjb2RlcnRoZW1lcy5jb21cbkZpbGU6IFdpZGdldHMgaW5pdCBqc1xuKi9cbiQoIGRvY3VtZW50ICkucmVhZHkoZnVuY3Rpb24oKSB7XG4gICAgXG4gICAgdmFyIERyYXdTcGFya2xpbmUgPSBmdW5jdGlvbigpIHtcbiAgICAgICAgLy8gTGluZSBDaGFydFxuICAgICAgICB2YXIgY29sb3JzID0gWycjMDBhY2MxJywgJyNmMTU1NmMnXTtcbiAgICAgICAgdmFyIGRhdGFDb2xvcnMgPSAkKFwiI2xpZmV0aW1lLXNhbGVzXCIpLmRhdGEoJ2NvbG9ycycpO1xuICAgICAgICBpZiAoZGF0YUNvbG9ycykge1xuICAgICAgICAgICAgY29sb3JzID0gZGF0YUNvbG9ycy5zcGxpdChcIixcIik7XG4gICAgICAgIH1cbiAgICAgICAgJCgnI2xpZmV0aW1lLXNhbGVzJykuc3BhcmtsaW5lKFswLCAyMywgNDMsIDM1LCA0NCwgNDUsIDU2LCAzNywgNDBdLCB7XG4gICAgICAgICAgICB0eXBlOiAnbGluZScsXG4gICAgICAgICAgICB3aWR0aDogXCIxMDAlXCIsXG4gICAgICAgICAgICBoZWlnaHQ6ICcyMjAnLFxuICAgICAgICAgICAgY2hhcnRSYW5nZU1heDogNTAsXG4gICAgICAgICAgICBsaW5lQ29sb3I6IGNvbG9yc1swXSxcbiAgICAgICAgICAgIGZpbGxDb2xvcjogaGV4VG9SR0IoY29sb3JzWzBdLCAwLjMpLFxuICAgICAgICAgICAgaGlnaGxpZ2h0TGluZUNvbG9yOiAncmdiYSgwLDAsMCwuMSknLFxuICAgICAgICAgICAgaGlnaGxpZ2h0U3BvdENvbG9yOiAncmdiYSgwLDAsMCwuMiknLFxuICAgICAgICAgICAgbWF4U3BvdENvbG9yOiBmYWxzZSxcbiAgICAgICAgICAgIG1pblNwb3RDb2xvcjogZmFsc2UsXG4gICAgICAgICAgICBzcG90Q29sb3I6IGZhbHNlLFxuICAgICAgICAgICAgbGluZVdpZHRoOiAxXG4gICAgICAgIH0pO1xuXG4gICAgICAgICQoJyNsaWZldGltZS1zYWxlcycpLnNwYXJrbGluZShbMjUsIDIzLCAyNiwgMjQsIDI1LCAzMiwgMzAsIDI0LCAxOV0sIHtcbiAgICAgICAgICAgIHR5cGU6ICdsaW5lJyxcbiAgICAgICAgICAgIHdpZHRoOiBcIjEwMCVcIixcbiAgICAgICAgICAgIGhlaWdodDogJzIyMCcsXG4gICAgICAgICAgICBjaGFydFJhbmdlTWF4OiA0MCxcbiAgICAgICAgICAgIGxpbmVDb2xvcjogY29sb3JzWzFdLFxuICAgICAgICAgICAgZmlsbENvbG9yOiBoZXhUb1JHQihjb2xvcnNbMV0sIDAuMyksXG4gICAgICAgICAgICBjb21wb3NpdGU6IHRydWUsXG4gICAgICAgICAgICBoaWdobGlnaHRMaW5lQ29sb3I6ICdyZ2JhKDAsMCwwLC4xKScsXG4gICAgICAgICAgICBoaWdobGlnaHRTcG90Q29sb3I6ICdyZ2JhKDAsMCwwLC4yKScsXG4gICAgICAgICAgICBtYXhTcG90Q29sb3I6IGZhbHNlLFxuICAgICAgICAgICAgbWluU3BvdENvbG9yOiBmYWxzZSxcbiAgICAgICAgICAgIHNwb3RDb2xvcjogZmFsc2UsXG4gICAgICAgICAgICBsaW5lV2lkdGg6IDFcbiAgICAgICAgfSk7XG5cbiAgICAgICAgLy8gQmFyIENoYXJ0XG4gICAgICAgIHZhciBjb2xvcnMgPSBbJyMwMGFjYzEnXTtcbiAgICAgICAgdmFyIGRhdGFDb2xvcnMgPSAkKFwiI2luY29tZS1hbW91bnRzXCIpLmRhdGEoJ2NvbG9ycycpO1xuICAgICAgICBpZiAoZGF0YUNvbG9ycykge1xuICAgICAgICAgICAgY29sb3JzID0gZGF0YUNvbG9ycy5zcGxpdChcIixcIik7XG4gICAgICAgIH1cbiAgICAgICAgJCgnI2luY29tZS1hbW91bnRzJykuc3BhcmtsaW5lKFszLCA2LCA3LCA4LCA2LCA0LCA3LCAxMCwgMTIsIDcsIDQsIDksIDEyLCAxMywgMTEsIDEyXSwge1xuICAgICAgICAgICAgdHlwZTogJ2JhcicsXG4gICAgICAgICAgICBoZWlnaHQ6ICcyMjAnLFxuICAgICAgICAgICAgYmFyV2lkdGg6ICcxMCcsXG4gICAgICAgICAgICBiYXJTcGFjaW5nOiAnMycsXG4gICAgICAgICAgICBiYXJDb2xvcjogY29sb3JzXG4gICAgICAgIH0pO1xuXG4gICAgICAgIC8vIFBpZSBDaGFydFxuICAgICAgICB2YXIgY29sb3JzID0gWycjMDBhY2MxJywnIzRiODhlNCcsJyNlM2VhZWYnLCcjZmQ3ZTE0J107XG4gICAgICAgIHZhciBkYXRhQ29sb3JzID0gJChcIiN0b3RhbC11c2Vyc1wiKS5kYXRhKCdjb2xvcnMnKTtcbiAgICAgICAgaWYgKGRhdGFDb2xvcnMpIHtcbiAgICAgICAgICAgIGNvbG9ycyA9IGRhdGFDb2xvcnMuc3BsaXQoXCIsXCIpO1xuICAgICAgICB9XG4gICAgICAgICQoJyN0b3RhbC11c2VycycpLnNwYXJrbGluZShbMjAsIDQwLCAzMCwgMTBdLCB7XG4gICAgICAgICAgICB0eXBlOiAncGllJyxcbiAgICAgICAgICAgIHdpZHRoOiAnMjIwJyxcbiAgICAgICAgICAgIGhlaWdodDogJzIyMCcsXG4gICAgICAgICAgICBzbGljZUNvbG9yczogY29sb3JzXG4gICAgICAgIH0pO1xuICAgIH07XG4gICAgXG4gICAgRHJhd1NwYXJrbGluZSgpO1xuICAgIFxuICAgIHZhciByZXNpemVDaGFydDtcblxuICAgICQod2luZG93KS5yZXNpemUoZnVuY3Rpb24oZSkge1xuICAgICAgICBjbGVhclRpbWVvdXQocmVzaXplQ2hhcnQpO1xuICAgICAgICByZXNpemVDaGFydCA9IHNldFRpbWVvdXQoZnVuY3Rpb24oKSB7XG4gICAgICAgICAgICBEcmF3U3BhcmtsaW5lKCk7XG4gICAgICAgIH0sIDMwMCk7XG4gICAgfSk7XG59KTtcblxuLyogdXRpbGl0eSBmdW5jdGlvbiAqL1xuXG5mdW5jdGlvbiBoZXhUb1JHQihoZXgsIGFscGhhKSB7XG4gICAgdmFyIHIgPSBwYXJzZUludChoZXguc2xpY2UoMSwgMyksIDE2KSxcbiAgICAgICAgZyA9IHBhcnNlSW50KGhleC5zbGljZSgzLCA1KSwgMTYpLFxuICAgICAgICBiID0gcGFyc2VJbnQoaGV4LnNsaWNlKDUsIDcpLCAxNik7XG5cbiAgICBpZiAoYWxwaGEpIHtcbiAgICAgICAgcmV0dXJuIFwicmdiYShcIiArIHIgKyBcIiwgXCIgKyBnICsgXCIsIFwiICsgYiArIFwiLCBcIiArIGFscGhhICsgXCIpXCI7XG4gICAgfSBlbHNlIHtcbiAgICAgICAgcmV0dXJuIFwicmdiKFwiICsgciArIFwiLCBcIiArIGcgKyBcIiwgXCIgKyBiICsgXCIpXCI7XG4gICAgfVxufSJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/pages/widgets.init.js\n");

/***/ }),

/***/ 60:
/*!**************************************************!*\
  !*** multi ./resources/js/pages/widgets.init.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/widgets.init.js */"./resources/js/pages/widgets.init.js");


/***/ })

/******/ });