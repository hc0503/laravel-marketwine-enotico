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
/******/ 	return __webpack_require__(__webpack_require__.s = 10);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/crm-dashboard.init.js":
/*!**************************************************!*\
  !*** ./resources/js/pages/crm-dashboard.init.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: CRM Dashboard init\n*/\n//\n// Candlestick Chart - 1\n//\nvar colors = ['#6658dd', '#1abc9c'];\nvar dataColors = $(\"#sales-analytics\").data('colors');\n\nif (dataColors) {\n  colors = dataColors.split(\",\");\n}\n\nvar options = {\n  chart: {\n    height: 385,\n    type: 'candlestick'\n  },\n  plotOptions: {\n    candlestick: {\n      colors: {\n        upward: colors[0],\n        downward: colors[1]\n      }\n    }\n  },\n  series: [{\n    data: seriesData\n  }],\n  stroke: {\n    show: true,\n    colors: '#f1f3fa',\n    width: [1, 4]\n  },\n  xaxis: {\n    type: 'datetime'\n  },\n  grid: {\n    borderColor: '#f1f3fa'\n  }\n};\nvar chart = new ApexCharts(document.querySelector(\"#sales-analytics\"), options);\nchart.render(); //\n// Sales Analytics\n//\n\nvar colors = ['#1abc9c', '#4a81d4'];\nvar dataColors = $(\"#deal-analytics\").data('colors');\n\nif (dataColors) {\n  colors = dataColors.split(\",\");\n}\n\nvar options = {\n  series: [{\n    name: 'Won',\n    type: 'column',\n    data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]\n  }, {\n    name: 'Loss',\n    type: 'line',\n    data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]\n  }],\n  chart: {\n    height: 370,\n    type: 'line'\n  },\n  stroke: {\n    width: [2, 3]\n  },\n  plotOptions: {\n    bar: {\n      columnWidth: '50%'\n    }\n  },\n  colors: colors,\n  dataLabels: {\n    enabled: true,\n    enabledOnSeries: [1]\n  },\n  labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],\n  xaxis: {\n    type: 'datetime'\n  },\n  legend: {\n    offsetY: 7\n  },\n  grid: {\n    padding: {\n      bottom: 20\n    }\n  },\n  fill: {\n    type: 'gradient',\n    gradient: {\n      shade: 'light',\n      type: \"horizontal\",\n      shadeIntensity: 0.25,\n      gradientToColors: undefined,\n      inverseColors: true,\n      opacityFrom: 0.75,\n      opacityTo: 0.75,\n      stops: [0, 0, 0]\n    }\n  },\n  yaxis: [{\n    title: {\n      text: 'Net Revenue'\n    }\n  }, {\n    opposite: true,\n    title: {\n      text: 'Number of Sales'\n    }\n  }]\n};\nvar chart = new ApexCharts(document.querySelector(\"#deal-analytics\"), options);\nchart.render(); //\n// Radialbar Chart - 3\n//\n\nvar colors = ['#f1556c'];\nvar dataColors = $(\"#campaigns-ratio-chart\").data('colors');\n\nif (dataColors) {\n  colors = dataColors.split(\",\");\n}\n\nvar options = {\n  chart: {\n    height: 285,\n    type: 'radialBar'\n  },\n  plotOptions: {\n    radialBar: {\n      startAngle: -135,\n      endAngle: 135,\n      dataLabels: {\n        name: {\n          fontSize: '16px',\n          color: undefined,\n          offsetY: 120\n        },\n        value: {\n          offsetY: 76,\n          fontSize: '22px',\n          color: undefined,\n          formatter: function formatter(val) {\n            return val + \"%\";\n          }\n        }\n      }\n    }\n  },\n  fill: {\n    gradient: {\n      enabled: true,\n      shade: 'dark',\n      shadeIntensity: 0.15,\n      inverseColors: false,\n      opacityFrom: 1,\n      opacityTo: 1,\n      stops: [0, 50, 65, 91]\n    }\n  },\n  stroke: {\n    dashArray: 4\n  },\n  colors: colors,\n  series: [67],\n  labels: ['Campaigns Ratio'],\n  responsive: [{\n    breakpoint: 380,\n    options: {\n      chart: {\n        height: 180\n      }\n    }\n  }]\n};\nvar chart = new ApexCharts(document.querySelector(\"#campaigns-ratio-chart\"), options);\nchart.render();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvY3JtLWRhc2hib2FyZC5pbml0LmpzP2Q4MTYiXSwibmFtZXMiOlsiY29sb3JzIiwiZGF0YUNvbG9ycyIsIiQiLCJkYXRhIiwic3BsaXQiLCJvcHRpb25zIiwiY2hhcnQiLCJoZWlnaHQiLCJ0eXBlIiwicGxvdE9wdGlvbnMiLCJjYW5kbGVzdGljayIsInVwd2FyZCIsImRvd253YXJkIiwic2VyaWVzIiwic2VyaWVzRGF0YSIsInN0cm9rZSIsInNob3ciLCJ3aWR0aCIsInhheGlzIiwiZ3JpZCIsImJvcmRlckNvbG9yIiwiQXBleENoYXJ0cyIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsInJlbmRlciIsIm5hbWUiLCJiYXIiLCJjb2x1bW5XaWR0aCIsImRhdGFMYWJlbHMiLCJlbmFibGVkIiwiZW5hYmxlZE9uU2VyaWVzIiwibGFiZWxzIiwibGVnZW5kIiwib2Zmc2V0WSIsInBhZGRpbmciLCJib3R0b20iLCJmaWxsIiwiZ3JhZGllbnQiLCJzaGFkZSIsInNoYWRlSW50ZW5zaXR5IiwiZ3JhZGllbnRUb0NvbG9ycyIsInVuZGVmaW5lZCIsImludmVyc2VDb2xvcnMiLCJvcGFjaXR5RnJvbSIsIm9wYWNpdHlUbyIsInN0b3BzIiwieWF4aXMiLCJ0aXRsZSIsInRleHQiLCJvcHBvc2l0ZSIsInJhZGlhbEJhciIsInN0YXJ0QW5nbGUiLCJlbmRBbmdsZSIsImZvbnRTaXplIiwiY29sb3IiLCJ2YWx1ZSIsImZvcm1hdHRlciIsInZhbCIsImRhc2hBcnJheSIsInJlc3BvbnNpdmUiLCJicmVha3BvaW50Il0sIm1hcHBpbmdzIjoiQUFBQTs7Ozs7OztBQVNBO0FBQ0E7QUFDQTtBQUNBLElBQUlBLE1BQU0sR0FBRyxDQUFDLFNBQUQsRUFBVyxTQUFYLENBQWI7QUFDQSxJQUFJQyxVQUFVLEdBQUdDLENBQUMsQ0FBQyxrQkFBRCxDQUFELENBQXNCQyxJQUF0QixDQUEyQixRQUEzQixDQUFqQjs7QUFDQSxJ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LEVBQUU7QUFDSEMsY0FBTSxFQUFFO0FBREw7QUFERjtBQUZBLEdBQUQ7QUEzQ0YsQ0FBZDtBQXFEQSxJQUFJRCxLQUFLLEdBQUcsSUFBSWUsVUFBSixDQUNSQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsd0JBQXZCLENBRFEsRUFFUmxCLE9BRlEsQ0FBWjtBQUtBQyxLQUFLLENBQUNrQixNQUFOIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3BhZ2VzL2NybS1kYXNoYm9hcmQuaW5pdC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXG5UZW1wbGF0ZSBOYW1lOiBVYm9sZCAtIFJlc3BvbnNpdmUgQm9vdHN0cmFwIDQgQWRtaW4gRGFzaGJvYXJkXG5BdXRob3I6IENvZGVyVGhlbWVzXG5XZWJzaXRlOiBodHRwczovL2NvZGVydGhlbWVzLmNvbS9cbkNvbnRhY3Q6IHN1cHBvcnRAY29kZXJ0aGVtZXMuY29tXG5GaWxlOiBDUk0gRGFzaGJvYXJkIGluaXRcbiovXG5cblxuLy9cbi8vIENhbmRsZXN0aWNrIENoYXJ0IC0gMVxuLy9cbnZhciBjb2xvcnMgPSBbJyM2NjU4ZGQnLCcjMWFiYzljJ107XG52YXIgZGF0YUNvbG9ycyA9ICQoXCIjc2FsZXMtYW5hbHl0aWNzXCIpLmRhdGEoJ2NvbG9ycycpO1xuaWYgKGRhdGFDb2xvcnMpIHtcbiAgICBjb2xvcnMgPSBkYXRhQ29sb3JzLnNwbGl0KFwiLFwiKTtcbn1cbnZhciBvcHRpb25zID0ge1xuICAgIGNoYXJ0OiB7XG4gICAgICAgIGhlaWdodDogMzg1LFxuICAgICAgICB0eXBlOiAnY2FuZGxlc3RpY2snLFxuICAgIH0sXG4gICAgcGxvdE9wdGlvbnM6IHtcbiAgICAgICAgY2FuZGxlc3RpY2s6IHtcbiAgICAgICAgICAgIGNvbG9yczoge1xuICAgICAgICAgICAgICAgIHVwd2FyZDogY29sb3JzWzBdLFxuICAgICAgICAgICAgICAgIGRvd253YXJkOiBjb2xvcnNbMV1cbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH0sXG4gICAgc2VyaWVzOiBbe1xuICAgICAgICBkYXRhOiBzZXJpZXNEYXRhXG4gICAgfV0sXG5cbiAgICBzdHJva2U6IHtcbiAgICAgICAgc2hvdzogdHJ1ZSxcbiAgICAgICAgY29sb3JzOiAnI2YxZjNmYScsXG4gICAgICAgIHdpZHRoOiBbMSwgNF1cbiAgICB9LFxuICAgIHhheGlzOiB7XG4gICAgICAgIHR5cGU6ICdkYXRldGltZSdcbiAgICB9LFxuICAgIGdyaWQ6IHtcbiAgICAgICAgYm9yZGVyQ29sb3I6ICcjZjFmM2ZhJ1xuICAgIH1cbn1cblxudmFyIGNoYXJ0ID0gbmV3IEFwZXhDaGFydHMoXG4gICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNzYWxlcy1hbmFseXRpY3NcIiksXG4gICAgb3B0aW9uc1xuKTtcblxuY2hhcnQucmVuZGVyKCk7XG5cbi8vXG4vLyBTYWxlcyBBbmFseXRpY3Ncbi8vXG52YXIgY29sb3JzID0gWycjMWFiYzljJywgJyM0YTgxZDQnXTtcbnZhciBkYXRhQ29sb3JzID0gJChcIiNkZWFsLWFuYWx5dGljc1wiKS5kYXRhKCdjb2xvcnMnKTtcbmlmIChkYXRhQ29sb3JzKSB7XG5cdGNvbG9ycyA9IGRhdGFDb2xvcnMuc3BsaXQoXCIsXCIpO1xufVxuXG52YXIgb3B0aW9ucyA9IHtcblx0c2VyaWVzOiBbe1xuXHRcdG5hbWU6ICdXb24nLFxuXHRcdHR5cGU6ICdjb2x1bW4nLFxuXHRcdGRhdGE6IFs0NDAsIDUwNSwgNDE0LCA2NzEsIDIyNywgNDEzLCAyMDEsIDM1MiwgNzUyLCAzMjAsIDI1NywgMTYwXVxuXHR9LCB7XG5cdFx0bmFtZTogJ0xvc3MnLFxuXHRcdHR5cGU6ICdsaW5lJyxcblx0XHRkYXRhOiBbMjMsIDQyLCAzNSwgMjcsIDQzLCAyMiwgMTcsIDMxLCAyMiwgMjIsIDEyLCAxNl1cblx0fV0sXG5cdGNoYXJ0OiB7XG5cdFx0aGVpZ2h0OiAzNzAsXG5cdFx0dHlwZTogJ2xpbmUnLFxuXHR9LFxuXHRzdHJva2U6IHtcblx0XHR3aWR0aDogWzIsIDNdXG5cdH0sXG5cdHBsb3RPcHRpb25zOiB7XG5cdFx0YmFyOiB7XG5cdFx0XHRjb2x1bW5XaWR0aDogJzUwJSdcblx0XHR9XG5cdH0sXG5cdGNvbG9yczogY29sb3JzLFxuXHRkYXRhTGFiZWxzOiB7XG5cdFx0ZW5hYmxlZDogdHJ1ZSxcblx0XHRlbmFibGVkT25TZXJpZXM6IFsxXVxuXHR9LFxuXHRsYWJlbHM6IFsnMDEgSmFuIDIwMDEnLCAnMDIgSmFuIDIwMDEnLCAnMDMgSmFuIDIwMDEnLCAnMDQgSmFuIDIwMDEnLCAnMDUgSmFuIDIwMDEnLCAnMDYgSmFuIDIwMDEnLCAnMDcgSmFuIDIwMDEnLCAnMDggSmFuIDIwMDEnLCAnMDkgSmFuIDIwMDEnLCAnMTAgSmFuIDIwMDEnLCAnMTEgSmFuIDIwMDEnLCAnMTIgSmFuIDIwMDEnXSxcblx0eGF4aXM6IHtcblx0XHR0eXBlOiAnZGF0ZXRpbWUnXG5cdH0sXG5cdGxlZ2VuZDoge1xuICAgICAgICBvZmZzZXRZOiA3LFxuXHR9LFxuXHRncmlkOiB7XG5cdFx0cGFkZGluZzoge1xuXHRcdCAgYm90dG9tOiAyMFxuXHRcdH1cblx0fSxcblx0ZmlsbDoge1xuXHRcdHR5cGU6ICdncmFkaWVudCcsXG5cdFx0Z3JhZGllbnQ6IHtcblx0XHRcdHNoYWRlOiAnbGlnaHQnLFxuXHRcdFx0dHlwZTogXCJob3Jpem9udGFsXCIsXG5cdFx0XHRzaGFkZUludGVuc2l0eTogMC4yNSxcblx0XHRcdGdyYWRpZW50VG9Db2xvcnM6IHVuZGVmaW5lZCxcblx0XHRcdGludmVyc2VDb2xvcnM6IHRydWUsXG5cdFx0XHRvcGFjaXR5RnJvbTogMC43NSxcblx0XHRcdG9wYWNpdHlUbzogMC43NSxcblx0XHRcdHN0b3BzOiBbMCwgMCwgMF1cblx0XHR9LFxuXHR9LFxuXHR5YXhpczogW3tcblx0XHR0aXRsZToge1xuXHRcdFx0dGV4dDogJ05ldCBSZXZlbnVlJyxcblx0XHR9LFxuXG5cdH0sIHtcblx0XHRvcHBvc2l0ZTogdHJ1ZSxcblx0XHR0aXRsZToge1xuXHRcdFx0dGV4dDogJ051bWJlciBvZiBTYWxlcydcblx0XHR9XG5cdH1dXG59O1xuXG52YXIgY2hhcnQgPSBuZXcgQXBleENoYXJ0cyhkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2RlYWwtYW5hbHl0aWNzXCIpLCBvcHRpb25zKTtcbmNoYXJ0LnJlbmRlcigpO1xuXG5cblxuLy9cbi8vIFJhZGlhbGJhciBDaGFydCAtIDNcbi8vXG52YXIgY29sb3JzID0gWycjZjE1NTZjJ107XG52YXIgZGF0YUNvbG9ycyA9ICQoXCIjY2FtcGFpZ25zLXJhdGlvLWNoYXJ0XCIpLmRhdGEoJ2NvbG9ycycpO1xuaWYgKGRhdGFDb2xvcnMpIHtcbiAgICBjb2xvcnMgPSBkYXRhQ29sb3JzLnNwbGl0KFwiLFwiKTtcbn1cbnZhciBvcHRpb25zID0ge1xuICAgIGNoYXJ0OiB7XG4gICAgICAgIGhlaWdodDogMjg1LFxuICAgICAgICB0eXBlOiAncmFkaWFsQmFyJyxcbiAgICB9LFxuICAgIHBsb3RPcHRpb25zOiB7XG4gICAgICAgIHJhZGlhbEJhcjoge1xuICAgICAgICAgICAgc3RhcnRBbmdsZTogLTEzNSxcbiAgICAgICAgICAgIGVuZEFuZ2xlOiAxMzUsXG4gICAgICAgICAgICBkYXRhTGFiZWxzOiB7XG4gICAgICAgICAgICAgICAgbmFtZToge1xuICAgICAgICAgICAgICAgICAgICBmb250U2l6ZTogJzE2cHgnLFxuICAgICAgICAgICAgICAgICAgICBjb2xvcjogdW5kZWZpbmVkLFxuICAgICAgICAgICAgICAgICAgICBvZmZzZXRZOiAxMjBcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIHZhbHVlOiB7XG4gICAgICAgICAgICAgICAgICAgIG9mZnNldFk6IDc2LFxuICAgICAgICAgICAgICAgICAgICBmb250U2l6ZTogJzIycHgnLFxuICAgICAgICAgICAgICAgICAgICBjb2xvcjogdW5kZWZpbmVkLFxuICAgICAgICAgICAgICAgICAgICBmb3JtYXR0ZXI6IGZ1bmN0aW9uICh2YWwpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiB2YWwgKyBcIiVcIjtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH0sXG4gICAgZmlsbDoge1xuICAgICAgICBncmFkaWVudDoge1xuICAgICAgICAgICAgZW5hYmxlZDogdHJ1ZSxcbiAgICAgICAgICAgIHNoYWRlOiAnZGFyaycsXG4gICAgICAgICAgICBzaGFkZUludGVuc2l0eTogMC4xNSxcbiAgICAgICAgICAgIGludmVyc2VDb2xvcnM6IGZhbHNlLFxuICAgICAgICAgICAgb3BhY2l0eUZyb206IDEsXG4gICAgICAgICAgICBvcGFjaXR5VG86IDEsXG4gICAgICAgICAgICBzdG9wczogWzAsIDUwLCA2NSwgOTFdXG4gICAgICAgIH0sXG4gICAgfSxcbiAgICBzdHJva2U6IHtcbiAgICAgICAgZGFzaEFycmF5OiA0XG4gICAgfSxcbiAgICBjb2xvcnM6IGNvbG9ycyxcbiAgICBzZXJpZXM6IFs2N10sXG4gICAgbGFiZWxzOiBbJ0NhbXBhaWducyBSYXRpbyddLFxuICAgIHJlc3BvbnNpdmU6IFt7XG4gICAgICAgIGJyZWFrcG9pbnQ6IDM4MCxcbiAgICAgICAgb3B0aW9uczoge1xuICAgICAgICAgICAgY2hhcnQ6IHtcbiAgICAgICAgICAgICAgICBoZWlnaHQ6IDE4MFxuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfV1cbn1cblxudmFyIGNoYXJ0ID0gbmV3IEFwZXhDaGFydHMoXG4gICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNjYW1wYWlnbnMtcmF0aW8tY2hhcnRcIiksXG4gICAgb3B0aW9uc1xuKTtcblxuY2hhcnQucmVuZGVyKCk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/pages/crm-dashboard.init.js\n");

/***/ }),

/***/ 10:
/*!********************************************************!*\
  !*** multi ./resources/js/pages/crm-dashboard.init.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/crm-dashboard.init.js */"./resources/js/pages/crm-dashboard.init.js");


/***/ })

/******/ });