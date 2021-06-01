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
/******/ 	return __webpack_require__(__webpack_require__.s = 59);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/vector-maps.init.js":
/*!************************************************!*\
  !*** ./resources/js/pages/vector-maps.init.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Vecor maps init js\n*/\n!function ($) {\n  \"use strict\";\n\n  var VectorMap = function VectorMap() {};\n\n  VectorMap.prototype.init = function () {\n    //various examples\n    $('#world-map-markers').vectorMap({\n      map: 'world_mill_en',\n      normalizeFunction: 'polynomial',\n      hoverOpacity: 0.7,\n      hoverColor: false,\n      regionStyle: {\n        initial: {\n          fill: '#d4dadd'\n        }\n      },\n      markerStyle: {\n        initial: {\n          r: 9,\n          'fill': '#6658dd',\n          'fill-opacity': 0.9,\n          'stroke': '#fff',\n          'stroke-width': 7,\n          'stroke-opacity': 0.4\n        },\n        hover: {\n          'stroke': '#fff',\n          'fill-opacity': 1,\n          'stroke-width': 1.5\n        }\n      },\n      backgroundColor: 'transparent',\n      markers: [{\n        latLng: [41.90, 12.45],\n        name: 'Vatican City'\n      }, {\n        latLng: [43.73, 7.41],\n        name: 'Monaco'\n      }, {\n        latLng: [-0.52, 166.93],\n        name: 'Nauru'\n      }, {\n        latLng: [-8.51, 179.21],\n        name: 'Tuvalu'\n      }, {\n        latLng: [43.93, 12.46],\n        name: 'San Marino'\n      }, {\n        latLng: [47.14, 9.52],\n        name: 'Liechtenstein'\n      }, {\n        latLng: [7.11, 171.06],\n        name: 'Marshall Islands'\n      }, {\n        latLng: [17.3, -62.73],\n        name: 'Saint Kitts and Nevis'\n      }, {\n        latLng: [3.2, 73.22],\n        name: 'Maldives'\n      }, {\n        latLng: [35.88, 14.5],\n        name: 'Malta'\n      }, {\n        latLng: [12.05, -61.75],\n        name: 'Grenada'\n      }, {\n        latLng: [13.16, -61.23],\n        name: 'Saint Vincent and the Grenadines'\n      }, {\n        latLng: [13.16, -59.55],\n        name: 'Barbados'\n      }, {\n        latLng: [17.11, -61.85],\n        name: 'Antigua and Barbuda'\n      }, {\n        latLng: [-4.61, 55.45],\n        name: 'Seychelles'\n      }, {\n        latLng: [7.35, 134.46],\n        name: 'Palau'\n      }, {\n        latLng: [42.5, 1.51],\n        name: 'Andorra'\n      }, {\n        latLng: [14.01, -60.98],\n        name: 'Saint Lucia'\n      }, {\n        latLng: [6.91, 158.18],\n        name: 'Federated States of Micronesia'\n      }, {\n        latLng: [1.3, 103.8],\n        name: 'Singapore'\n      }, {\n        latLng: [0.33, 6.73],\n        name: 'SÃ£o TomÃ© and PrÃ­ncipe'\n      }]\n    });\n    $('#usa-vectormap').vectorMap({\n      map: 'us_merc_en',\n      backgroundColor: 'transparent',\n      regionStyle: {\n        initial: {\n          fill: '#4fc6e1'\n        }\n      }\n    });\n    $('#india-vectormap').vectorMap({\n      map: 'in_mill_en',\n      backgroundColor: 'transparent',\n      regionStyle: {\n        initial: {\n          fill: '#f7b84b'\n        }\n      }\n    });\n    $('#australia-vectormap').vectorMap({\n      map: 'au_mill_en',\n      backgroundColor: 'transparent',\n      regionStyle: {\n        initial: {\n          fill: '#1abc9c'\n        }\n      }\n    });\n    $('#chicago-vectormap').vectorMap({\n      map: 'us-il-chicago_mill_en',\n      backgroundColor: 'transparent',\n      regionStyle: {\n        initial: {\n          fill: '#6658dd'\n        }\n      }\n    });\n    $('#uk-vectormap').vectorMap({\n      map: 'uk_mill_en',\n      backgroundColor: 'transparent',\n      regionStyle: {\n        initial: {\n          fill: '#4a81d4'\n        }\n      }\n    });\n    $('#canada-vectormap').vectorMap({\n      map: 'ca_lcc_en',\n      backgroundColor: 'transparent',\n      regionStyle: {\n        initial: {\n          fill: '#f1556c'\n        }\n      }\n    });\n    $('#europe-vectormap').vectorMap({\n      map: 'europe_mill_en',\n      backgroundColor: 'transparent',\n      regionStyle: {\n        initial: {\n          fill: '#727cf5'\n        }\n      }\n    });\n    $('#france-vectormap').vectorMap({\n      map: 'fr_merc_en',\n      backgroundColor: 'transparent',\n      regionStyle: {\n        initial: {\n          fill: '#0acf97'\n        }\n      }\n    });\n    $('#spain-vectormap').vectorMap({\n      map: 'es_merc',\n      backgroundColor: 'transparent',\n      regionStyle: {\n        initial: {\n          fill: '#39afd1'\n        }\n      }\n    });\n    $('#spain2-vectormap').vectorMap({\n      map: 'es_mill',\n      backgroundColor: 'transparent',\n      regionStyle: {\n        initial: {\n          fill: '#6c757d'\n        }\n      }\n    });\n  }, //init\n  $.VectorMap = new VectorMap(), $.VectorMap.Constructor = VectorMap;\n}(window.jQuery), //initializing\nfunction ($) {\n  \"use strict\";\n\n  $.VectorMap.init();\n}(window.jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvdmVjdG9yLW1hcHMuaW5pdC5qcz8wN2I4Il0sIm5hbWVzIjpbIiQiLCJWZWN0b3JNYXAiLCJwcm90b3R5cGUiLCJpbml0IiwidmVjdG9yTWFwIiwibWFwIiwibm9ybWFsaXplRnVuY3Rpb24iLCJob3Zlck9wYWNpdHkiLCJob3ZlckNvbG9yIiwicmVnaW9uU3R5bGUiLCJpbml0aWFsIiwiZmlsbCIsIm1hcmtlclN0eWxlIiwiciIsImhvdmVyIiwiYmFja2dyb3VuZENvbG9yIiwibWFya2VycyIsImxhdExuZyIsIm5hbWUiLCJDb25zdHJ1Y3RvciIsIndpbmRvdyIsImpRdWVyeSJdLCJtYXBwaW5ncyI6IkFBQUE7Ozs7Ozs7QUFRQSxDQUFFLFVBQVVBLENBQVYsRUFBYTtBQUNkOztBQUVBLE1BQUlDLFNBQVMsR0FBRyxTQUFaQSxTQUFZLEdBQVksQ0FDM0IsQ0FERDs7QUFHQUEsV0FBUyxDQUFDQyxTQUFWLENBQW9CQyxJQUFwQixHQUEyQixZQUFZO0FBQ3RDO0FBQ0FILEtBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCSSxTQUF4QixDQUFrQztBQUNqQ0MsU0FBRyxFQUFFLGVBRDRCO0FBRWpDQyx1QkFBaUIsRUFBRSxZQUZjO0FBR2pDQyxrQkFBWSxFQUFFLEdBSG1CO0FBSWpDQyxnQkFBVSxFQUFFLEtBSnFCO0FBS2pDQyxpQkFBVyxFQUFFO0FBQ1pDLGVBQU8sRUFBRTtBQUNSQyxjQUFJLEVBQUU7QUFERTtBQURHLE9BTG9CO0FBVWpDQyxpQkFBVyxFQUFFO0FBQ1pGLGVBQU8sRUFBRTtBQUNSRyxXQUFDLEVBQUUsQ0FESztBQUVSLGtCQUFRLFNBRkE7QUFHUiwwQkFBZ0IsR0FIUjtBQUlSLG9CQUFVLE1BSkY7QUFLUiwwQkFBZ0IsQ0FMUjtBQU1SLDRCQUFrQjtBQU5WLFNBREc7QUFVWkMsYUFBSyxFQUFFO0FBQ04sb0JBQVUsTUFESjtBQUVOLDBCQUFnQixDQUZWO0FBR04sMEJBQWdCO0FBSFY7QUFWSyxPQVZvQjtBQTBCakNDLHFCQUFlLEVBQUUsYUExQmdCO0FBMkJqQ0MsYUFBTyxFQUFFLENBQUM7QUFDVEMsY0FBTSxFQUFFLENBQUMsS0FBRCxFQUFRLEtBQVIsQ0FEQztBQUVUQyxZQUFJLEVBQUU7QUFGRyxPQUFELEVBR047QUFDRkQsY0FBTSxFQUFFLENBQUMsS0FBRCxFQUFRLElBQVIsQ0FETjtBQUVGQyxZQUFJLEVBQUU7QUFGSixPQUhNLEVBTU47QUFDRkQsY0FBTSxFQUFFLENBQUMsQ0FBQyxJQUFGLEVBQVEsTUFBUixDQUROO0FBRUZDLFlBQUksRUFBRTtBQUZKLE9BTk0sRUFTTjtBQUNGRCxjQUFNLEVBQUUsQ0FBQyxDQUFDLElBQUYsRUFBUSxNQUFSLENBRE47QUFFRkMsWUFBSSxFQUFFO0FBRkosT0FUTSxFQVlOO0FBQ0ZELGNBQU0sRUFBRSxDQUFDLEtBQUQsRUFBUSxLQUFSLENBRE47QUFFRkMsWUFBSSxFQUFFO0FBRkosT0FaTSxFQWVOO0FBQ0ZELGNBQU0sRUFBRSxDQUFDLEtBQUQsRUFBUSxJQUFSLENBRE47QUFFRkMsWUFBSSxFQUFFO0FBRkosT0FmTSxFQWtCTjtBQUNGRCxjQUFNLEVBQUUsQ0FBQyxJQUFELEVBQU8sTUFBUCxDQUROO0FBRUZDLFlBQUksRUFBRTtBQUZKLE9BbEJNLEVBcUJOO0FBQ0ZELGNBQU0sRUFBRSxDQUFDLElBQUQsRUFBTyxDQUFDLEtBQVIsQ0FETjtBQUVGQyxZQUFJLEVBQUU7QUFGSixPQXJCTSxFQXdCTjtBQUNGRCxjQUFNLEVBQUUsQ0FBQyxHQUFELEVBQU0sS0FBTixDQUROO0FBRUZDLFlBQUksRUFBRTtBQUZKLE9BeEJNLEVBMkJOO0FBQ0ZELGNBQU0sRUFBRSxDQUFDLEtBQUQsRUFBUSxJQUFSLENBRE47QUFFRkMsWUFBSSxFQUFFO0FBRkosT0EzQk0sRUE4Qk47QUFDRkQsY0FBTSxFQUFFLENBQUMsS0FBRCxFQUFRLENBQUMsS0FBVCxDQUROO0FBRUZDLFlBQUksRUFBRTtBQUZKLE9BOUJNLEVBaUNOO0FBQ0ZELGNBQU0sRUFBRSxDQUFDLEtBQUQsRUFBUSxDQUFDLEtBQVQsQ0FETjtBQUVGQyxZQUFJLEVBQUU7QUFGSixPQWpDTSxFQW9DTjtBQUNGRCxjQUFNLEVBQUUsQ0FBQyxLQUFELEVBQVEsQ0FBQyxLQUFULENBRE47QUFFRkMsWUFBSSxFQUFFO0FBRkosT0FwQ00sRUF1Q047QUFDRkQsY0FBTSxFQUFFLENBQUMsS0FBRCxFQUFRLENBQUMsS0FBVCxDQUROO0FBRUZDLFlBQUksRUFBRTtBQUZKLE9BdkNNLEVBMENOO0FBQ0ZELGNBQU0sRUFBRSxDQUFDLENBQUMsSUFBRixFQUFRLEtBQVIsQ0FETjtBQUVGQyxZQUFJLEVBQUU7QUFGSixPQTFDTSxFQTZDTjtBQUNGRCxjQUFNLEVBQUUsQ0FBQyxJQUFELEVBQU8sTUFBUCxDQUROO0FBRUZDLFlBQUksRUFBRTtBQUZKLE9BN0NNLEVBZ0ROO0FBQ0ZELGNBQU0sRUFBRSxDQUFDLElBQUQsRUFBTyxJQUFQLENBRE47QUFFRkMsWUFBSSxFQUFFO0FBRkosT0FoRE0sRUFtRE47QUFDRkQsY0FBTSxFQUFFLENBQUMsS0FBRCxFQUFRLENBQUMsS0FBVCxDQUROO0FBRUZDLFlBQUksRUFBRTtBQUZKLE9BbkRNLEVBc0ROO0FBQ0ZELGNBQU0sRUFBRSxDQUFDLElBQUQsRUFBTyxNQUFQLENBRE47QUFFRkMsWUFBSSxFQUFFO0FBRkosT0F0RE0sRUF5RE47QUFDRkQsY0FBTSxFQUFFLENBQUMsR0FBRCxFQUFNLEtBQU4sQ0FETjtBQUVGQyxZQUFJLEVBQUU7QUFGSixPQXpETSxFQTRETjtBQUNGRCxjQUFNLEVBQUUsQ0FBQyxJQUFELEVBQU8sSUFBUCxDQUROO0FBRUZDLFlBQUksRUFBRTtBQUZKLE9BNURNO0FBM0J3QixLQUFsQztBQTZGQWxCLEtBQUMsQ0FBQyxnQkFBRCxDQUFELENBQW9CSSxTQUFwQixDQUE4QjtBQUM3QkMsU0FBRyxFQUFFLFlBRHdCO0FBRTdCVSxxQkFBZSxFQUFFLGFBRlk7QUFHN0JOLGlCQUFXLEVBQUU7QUFDWkMsZUFBTyxFQUFFO0FBQ1JDLGNBQUksRUFBRTtBQURFO0FBREc7QUFIZ0IsS0FBOUI7QUFVQVgsS0FBQyxDQUFDLGtCQUFELENBQUQsQ0FBc0JJLFNBQXRCLENBQWdDO0FBQy9CQyxTQUFHLEVBQUUsWUFEMEI7QUFFL0JVLHFCQUFlLEVBQUUsYUFGYztBQUcvQk4saUJBQVcsRUFBRTtBQUNaQyxlQUFPLEVBQUU7QUFDUkMsY0FBSSxFQUFFO0FBREU7QUFERztBQUhrQixLQUFoQztBQVVBWCxLQUFDLENBQUMsc0JBQUQsQ0FBRCxDQUEwQkksU0FBMUIsQ0FBb0M7QUFDbkNDLFNBQUcsRUFBRSxZQUQ4QjtBQUVuQ1UscUJBQWUsRUFBRSxhQUZrQjtBQUduQ04saUJBQVcsRUFBRTtBQUNaQyxlQUFPLEVBQUU7QUFDUkMsY0FBSSxFQUFFO0FBREU7QUFERztBQUhzQixLQUFwQztBQVVBWCxLQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QkksU0FBeEIsQ0FBa0M7QUFDakNDLFNBQUcsRUFBRSx1QkFENEI7QUFFakNVLHFCQUFlLEVBQUUsYUFGZ0I7QUFHakNOLGlCQUFXLEVBQUU7QUFDWkMsZUFBTyxFQUFFO0FBQ1JDLGNBQUksRUFBRTtBQURFO0FBREc7QUFIb0IsS0FBbEM7QUFVQVgsS0FBQyxDQUFDLGVBQUQsQ0FBRCxDQUFtQkksU0FBbkIsQ0FBNkI7QUFDNUJDLFNBQUcsRUFBRSxZQUR1QjtBQUU1QlUscUJBQWUsRUFBRSxhQUZXO0FBRzVCTixpQkFBVyxFQUFFO0FBQ1pDLGVBQU8sRUFBRTtBQUNSQyxjQUFJLEVBQUU7QUFERTtBQURHO0FBSGUsS0FBN0I7QUFVQVgsS0FBQyxDQUFDLG1CQUFELENBQUQsQ0FBdUJJLFNBQXZCLENBQWlDO0FBQ2hDQyxTQUFHLEVBQUUsV0FEMkI7QUFFaENVLHFCQUFlLEVBQUUsYUFGZTtBQUdoQ04saUJBQVcsRUFBRTtBQUNaQyxlQUFPLEVBQUU7QUFDUkMsY0FBSSxFQUFFO0FBREU7QUFERztBQUhtQixLQUFqQztBQVVBWCxLQUFDLENBQUMsbUJBQUQsQ0FBRCxDQUF1QkksU0FBdkIsQ0FBaUM7QUFDaENDLFNBQUcsRUFBRSxnQkFEMkI7QUFFaENVLHFCQUFlLEVBQUUsYUFGZTtBQUdoQ04saUJBQVcsRUFBRTtBQUNaQyxlQUFPLEVBQUU7QUFDUkMsY0FBSSxFQUFFO0FBREU7QUFERztBQUhtQixLQUFqQztBQVVBWCxLQUFDLENBQUMsbUJBQUQsQ0FBRCxDQUF1QkksU0FBdkIsQ0FBaUM7QUFDaENDLFNBQUcsRUFBRSxZQUQyQjtBQUVoQ1UscUJBQWUsRUFBRSxhQUZlO0FBR2hDTixpQkFBVyxFQUFFO0FBQ1pDLGVBQU8sRUFBRTtBQUNSQyxjQUFJLEVBQUU7QUFERTtBQURHO0FBSG1CLEtBQWpDO0FBVUFYLEtBQUMsQ0FBQyxrQkFBRCxDQUFELENBQXNCSSxTQUF0QixDQUFnQztBQUMvQkMsU0FBRyxFQUFFLFNBRDBCO0FBRS9CVSxxQkFBZSxFQUFFLGFBRmM7QUFHL0JOLGlCQUFXLEVBQUU7QUFDWkMsZUFBTyxFQUFFO0FBQ1JDLGNBQUksRUFBRTtBQURFO0FBREc7QUFIa0IsS0FBaEM7QUFVQVgsS0FBQyxDQUFDLG1CQUFELENBQUQsQ0FBdUJJLFNBQXZCLENBQWlDO0FBQ2hDQyxTQUFHLEVBQUUsU0FEMkI7QUFFaENVLHFCQUFlLEVBQUUsYUFGZTtBQUdoQ04saUJBQVcsRUFBRTtBQUNaQyxlQUFPLEVBQUU7QUFDUkMsY0FBSSxFQUFFO0FBREU7QUFERztBQUhtQixLQUFqQztBQVVBLEdBbk1ELEVBb01DO0FBQ0FYLEdBQUMsQ0FBQ0MsU0FBRixHQUFjLElBQUlBLFNBQUosRUFyTWYsRUFxTThCRCxDQUFDLENBQUNDLFNBQUYsQ0FBWWtCLFdBQVosR0FDN0JsQixTQXRNRDtBQXVNQSxDQTdNQyxDQTZNQW1CLE1BQU0sQ0FBQ0MsTUE3TVAsQ0FBRixFQStNQztBQUNBLFVBQVVyQixDQUFWLEVBQWE7QUFDWjs7QUFDQUEsR0FBQyxDQUFDQyxTQUFGLENBQVlFLElBQVo7QUFDQSxDQUhELENBR0VpQixNQUFNLENBQUNDLE1BSFQsQ0FoTkQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvdmVjdG9yLW1hcHMuaW5pdC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXG5UZW1wbGF0ZSBOYW1lOiBVYm9sZCAtIFJlc3BvbnNpdmUgQm9vdHN0cmFwIDQgQWRtaW4gRGFzaGJvYXJkXG5BdXRob3I6IENvZGVyVGhlbWVzXG5XZWJzaXRlOiBodHRwczovL2NvZGVydGhlbWVzLmNvbS9cbkNvbnRhY3Q6IHN1cHBvcnRAY29kZXJ0aGVtZXMuY29tXG5GaWxlOiBWZWNvciBtYXBzIGluaXQganNcbiovXG5cbiEgZnVuY3Rpb24gKCQpIHtcblx0XCJ1c2Ugc3RyaWN0XCI7XG5cblx0dmFyIFZlY3Rvck1hcCA9IGZ1bmN0aW9uICgpIHtcblx0fTtcblxuXHRWZWN0b3JNYXAucHJvdG90eXBlLmluaXQgPSBmdW5jdGlvbiAoKSB7XG5cdFx0Ly92YXJpb3VzIGV4YW1wbGVzXG5cdFx0JCgnI3dvcmxkLW1hcC1tYXJrZXJzJykudmVjdG9yTWFwKHtcblx0XHRcdG1hcDogJ3dvcmxkX21pbGxfZW4nLFxuXHRcdFx0bm9ybWFsaXplRnVuY3Rpb246ICdwb2x5bm9taWFsJyxcblx0XHRcdGhvdmVyT3BhY2l0eTogMC43LFxuXHRcdFx0aG92ZXJDb2xvcjogZmFsc2UsXG5cdFx0XHRyZWdpb25TdHlsZToge1xuXHRcdFx0XHRpbml0aWFsOiB7XG5cdFx0XHRcdFx0ZmlsbDogJyNkNGRhZGQnXG5cdFx0XHRcdH1cblx0XHRcdH0sXG5cdFx0XHRtYXJrZXJTdHlsZToge1xuXHRcdFx0XHRpbml0aWFsOiB7XG5cdFx0XHRcdFx0cjogOSxcblx0XHRcdFx0XHQnZmlsbCc6ICcjNjY1OGRkJyxcblx0XHRcdFx0XHQnZmlsbC1vcGFjaXR5JzogMC45LFxuXHRcdFx0XHRcdCdzdHJva2UnOiAnI2ZmZicsXG5cdFx0XHRcdFx0J3N0cm9rZS13aWR0aCc6IDcsXG5cdFx0XHRcdFx0J3N0cm9rZS1vcGFjaXR5JzogMC40XG5cdFx0XHRcdH0sXG5cblx0XHRcdFx0aG92ZXI6IHtcblx0XHRcdFx0XHQnc3Ryb2tlJzogJyNmZmYnLFxuXHRcdFx0XHRcdCdmaWxsLW9wYWNpdHknOiAxLFxuXHRcdFx0XHRcdCdzdHJva2Utd2lkdGgnOiAxLjVcblx0XHRcdFx0fVxuXHRcdFx0fSxcblx0XHRcdGJhY2tncm91bmRDb2xvcjogJ3RyYW5zcGFyZW50Jyxcblx0XHRcdG1hcmtlcnM6IFt7XG5cdFx0XHRcdGxhdExuZzogWzQxLjkwLCAxMi40NV0sXG5cdFx0XHRcdG5hbWU6ICdWYXRpY2FuIENpdHknXG5cdFx0XHR9LCB7XG5cdFx0XHRcdGxhdExuZzogWzQzLjczLCA3LjQxXSxcblx0XHRcdFx0bmFtZTogJ01vbmFjbydcblx0XHRcdH0sIHtcblx0XHRcdFx0bGF0TG5nOiBbLTAuNTIsIDE2Ni45M10sXG5cdFx0XHRcdG5hbWU6ICdOYXVydSdcblx0XHRcdH0sIHtcblx0XHRcdFx0bGF0TG5nOiBbLTguNTEsIDE3OS4yMV0sXG5cdFx0XHRcdG5hbWU6ICdUdXZhbHUnXG5cdFx0XHR9LCB7XG5cdFx0XHRcdGxhdExuZzogWzQzLjkzLCAxMi40Nl0sXG5cdFx0XHRcdG5hbWU6ICdTYW4gTWFyaW5vJ1xuXHRcdFx0fSwge1xuXHRcdFx0XHRsYXRMbmc6IFs0Ny4xNCwgOS41Ml0sXG5cdFx0XHRcdG5hbWU6ICdMaWVjaHRlbnN0ZWluJ1xuXHRcdFx0fSwge1xuXHRcdFx0XHRsYXRMbmc6IFs3LjExLCAxNzEuMDZdLFxuXHRcdFx0XHRuYW1lOiAnTWFyc2hhbGwgSXNsYW5kcydcblx0XHRcdH0sIHtcblx0XHRcdFx0bGF0TG5nOiBbMTcuMywgLTYyLjczXSxcblx0XHRcdFx0bmFtZTogJ1NhaW50IEtpdHRzIGFuZCBOZXZpcydcblx0XHRcdH0sIHtcblx0XHRcdFx0bGF0TG5nOiBbMy4yLCA3My4yMl0sXG5cdFx0XHRcdG5hbWU6ICdNYWxkaXZlcydcblx0XHRcdH0sIHtcblx0XHRcdFx0bGF0TG5nOiBbMzUuODgsIDE0LjVdLFxuXHRcdFx0XHRuYW1lOiAnTWFsdGEnXG5cdFx0XHR9LCB7XG5cdFx0XHRcdGxhdExuZzogWzEyLjA1LCAtNjEuNzVdLFxuXHRcdFx0XHRuYW1lOiAnR3JlbmFkYSdcblx0XHRcdH0sIHtcblx0XHRcdFx0bGF0TG5nOiBbMTMuMTYsIC02MS4yM10sXG5cdFx0XHRcdG5hbWU6ICdTYWludCBWaW5jZW50IGFuZCB0aGUgR3JlbmFkaW5lcydcblx0XHRcdH0sIHtcblx0XHRcdFx0bGF0TG5nOiBbMTMuMTYsIC01OS41NV0sXG5cdFx0XHRcdG5hbWU6ICdCYXJiYWRvcydcblx0XHRcdH0sIHtcblx0XHRcdFx0bGF0TG5nOiBbMTcuMTEsIC02MS44NV0sXG5cdFx0XHRcdG5hbWU6ICdBbnRpZ3VhIGFuZCBCYXJidWRhJ1xuXHRcdFx0fSwge1xuXHRcdFx0XHRsYXRMbmc6IFstNC42MSwgNTUuNDVdLFxuXHRcdFx0XHRuYW1lOiAnU2V5Y2hlbGxlcydcblx0XHRcdH0sIHtcblx0XHRcdFx0bGF0TG5nOiBbNy4zNSwgMTM0LjQ2XSxcblx0XHRcdFx0bmFtZTogJ1BhbGF1J1xuXHRcdFx0fSwge1xuXHRcdFx0XHRsYXRMbmc6IFs0Mi41LCAxLjUxXSxcblx0XHRcdFx0bmFtZTogJ0FuZG9ycmEnXG5cdFx0XHR9LCB7XG5cdFx0XHRcdGxhdExuZzogWzE0LjAxLCAtNjAuOThdLFxuXHRcdFx0XHRuYW1lOiAnU2FpbnQgTHVjaWEnXG5cdFx0XHR9LCB7XG5cdFx0XHRcdGxhdExuZzogWzYuOTEsIDE1OC4xOF0sXG5cdFx0XHRcdG5hbWU6ICdGZWRlcmF0ZWQgU3RhdGVzIG9mIE1pY3JvbmVzaWEnXG5cdFx0XHR9LCB7XG5cdFx0XHRcdGxhdExuZzogWzEuMywgMTAzLjhdLFxuXHRcdFx0XHRuYW1lOiAnU2luZ2Fwb3JlJ1xuXHRcdFx0fSwge1xuXHRcdFx0XHRsYXRMbmc6IFswLjMzLCA2LjczXSxcblx0XHRcdFx0bmFtZTogJ1PDg8KjbyBUb23Dg8KpIGFuZCBQcsODwq1uY2lwZSdcblx0XHRcdH1dXG5cdFx0fSk7XG5cblx0XHQkKCcjdXNhLXZlY3Rvcm1hcCcpLnZlY3Rvck1hcCh7XG5cdFx0XHRtYXA6ICd1c19tZXJjX2VuJyxcblx0XHRcdGJhY2tncm91bmRDb2xvcjogJ3RyYW5zcGFyZW50Jyxcblx0XHRcdHJlZ2lvblN0eWxlOiB7XG5cdFx0XHRcdGluaXRpYWw6IHtcblx0XHRcdFx0XHRmaWxsOiAnIzRmYzZlMSdcblx0XHRcdFx0fVxuXHRcdFx0fVxuXHRcdH0pO1xuXG5cdFx0JCgnI2luZGlhLXZlY3Rvcm1hcCcpLnZlY3Rvck1hcCh7XG5cdFx0XHRtYXA6ICdpbl9taWxsX2VuJyxcblx0XHRcdGJhY2tncm91bmRDb2xvcjogJ3RyYW5zcGFyZW50Jyxcblx0XHRcdHJlZ2lvblN0eWxlOiB7XG5cdFx0XHRcdGluaXRpYWw6IHtcblx0XHRcdFx0XHRmaWxsOiAnI2Y3Yjg0Yidcblx0XHRcdFx0fVxuXHRcdFx0fVxuXHRcdH0pO1xuXG5cdFx0JCgnI2F1c3RyYWxpYS12ZWN0b3JtYXAnKS52ZWN0b3JNYXAoe1xuXHRcdFx0bWFwOiAnYXVfbWlsbF9lbicsXG5cdFx0XHRiYWNrZ3JvdW5kQ29sb3I6ICd0cmFuc3BhcmVudCcsXG5cdFx0XHRyZWdpb25TdHlsZToge1xuXHRcdFx0XHRpbml0aWFsOiB7XG5cdFx0XHRcdFx0ZmlsbDogJyMxYWJjOWMnXG5cdFx0XHRcdH1cblx0XHRcdH1cblx0XHR9KTtcblxuXHRcdCQoJyNjaGljYWdvLXZlY3Rvcm1hcCcpLnZlY3Rvck1hcCh7XG5cdFx0XHRtYXA6ICd1cy1pbC1jaGljYWdvX21pbGxfZW4nLFxuXHRcdFx0YmFja2dyb3VuZENvbG9yOiAndHJhbnNwYXJlbnQnLFxuXHRcdFx0cmVnaW9uU3R5bGU6IHtcblx0XHRcdFx0aW5pdGlhbDoge1xuXHRcdFx0XHRcdGZpbGw6ICcjNjY1OGRkJ1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cdFx0fSk7XG5cblx0XHQkKCcjdWstdmVjdG9ybWFwJykudmVjdG9yTWFwKHtcblx0XHRcdG1hcDogJ3VrX21pbGxfZW4nLFxuXHRcdFx0YmFja2dyb3VuZENvbG9yOiAndHJhbnNwYXJlbnQnLFxuXHRcdFx0cmVnaW9uU3R5bGU6IHtcblx0XHRcdFx0aW5pdGlhbDoge1xuXHRcdFx0XHRcdGZpbGw6ICcjNGE4MWQ0J1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cdFx0fSk7XG5cblx0XHQkKCcjY2FuYWRhLXZlY3Rvcm1hcCcpLnZlY3Rvck1hcCh7XG5cdFx0XHRtYXA6ICdjYV9sY2NfZW4nLFxuXHRcdFx0YmFja2dyb3VuZENvbG9yOiAndHJhbnNwYXJlbnQnLFxuXHRcdFx0cmVnaW9uU3R5bGU6IHtcblx0XHRcdFx0aW5pdGlhbDoge1xuXHRcdFx0XHRcdGZpbGw6ICcjZjE1NTZjJ1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cdFx0fSk7XG5cblx0XHQkKCcjZXVyb3BlLXZlY3Rvcm1hcCcpLnZlY3Rvck1hcCh7XG5cdFx0XHRtYXA6ICdldXJvcGVfbWlsbF9lbicsXG5cdFx0XHRiYWNrZ3JvdW5kQ29sb3I6ICd0cmFuc3BhcmVudCcsXG5cdFx0XHRyZWdpb25TdHlsZToge1xuXHRcdFx0XHRpbml0aWFsOiB7XG5cdFx0XHRcdFx0ZmlsbDogJyM3MjdjZjUnXG5cdFx0XHRcdH1cblx0XHRcdH1cblx0XHR9KTtcblxuXHRcdCQoJyNmcmFuY2UtdmVjdG9ybWFwJykudmVjdG9yTWFwKHtcblx0XHRcdG1hcDogJ2ZyX21lcmNfZW4nLFxuXHRcdFx0YmFja2dyb3VuZENvbG9yOiAndHJhbnNwYXJlbnQnLFxuXHRcdFx0cmVnaW9uU3R5bGU6IHtcblx0XHRcdFx0aW5pdGlhbDoge1xuXHRcdFx0XHRcdGZpbGw6ICcjMGFjZjk3J1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cdFx0fSk7XG5cblx0XHQkKCcjc3BhaW4tdmVjdG9ybWFwJykudmVjdG9yTWFwKHtcblx0XHRcdG1hcDogJ2VzX21lcmMnLFxuXHRcdFx0YmFja2dyb3VuZENvbG9yOiAndHJhbnNwYXJlbnQnLFxuXHRcdFx0cmVnaW9uU3R5bGU6IHtcblx0XHRcdFx0aW5pdGlhbDoge1xuXHRcdFx0XHRcdGZpbGw6ICcjMzlhZmQxJ1xuXHRcdFx0XHR9XG5cdFx0XHR9XG5cdFx0fSk7XG5cblx0XHQkKCcjc3BhaW4yLXZlY3Rvcm1hcCcpLnZlY3Rvck1hcCh7XG5cdFx0XHRtYXA6ICdlc19taWxsJyxcblx0XHRcdGJhY2tncm91bmRDb2xvcjogJ3RyYW5zcGFyZW50Jyxcblx0XHRcdHJlZ2lvblN0eWxlOiB7XG5cdFx0XHRcdGluaXRpYWw6IHtcblx0XHRcdFx0XHRmaWxsOiAnIzZjNzU3ZCdcblx0XHRcdFx0fVxuXHRcdFx0fVxuXHRcdH0pO1xuXG5cdH0sXG5cdFx0Ly9pbml0XG5cdFx0JC5WZWN0b3JNYXAgPSBuZXcgVmVjdG9yTWFwLCAkLlZlY3Rvck1hcC5Db25zdHJ1Y3RvciA9XG5cdFx0VmVjdG9yTWFwXG59KHdpbmRvdy5qUXVlcnkpLFxuXG5cdC8vaW5pdGlhbGl6aW5nXG5cdGZ1bmN0aW9uICgkKSB7XG5cdFx0XCJ1c2Ugc3RyaWN0XCI7XG5cdFx0JC5WZWN0b3JNYXAuaW5pdCgpXG5cdH0od2luZG93LmpRdWVyeSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/pages/vector-maps.init.js\n");

/***/ }),

/***/ 59:
/*!******************************************************!*\
  !*** multi ./resources/js/pages/vector-maps.init.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/vector-maps.init.js */"./resources/js/pages/vector-maps.init.js");


/***/ })

/******/ });