/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunk"] = self["webpackChunk"] || []).push([["/scripts/editor"],{

/***/ "./resources/scripts/editor.js":
/*!*************************************!*\
  !*** ./resources/scripts/editor.js ***!
  \*************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _wordpress_edit_post__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/edit-post */ \"@wordpress/edit-post\");\n/* harmony import */ var _wordpress_edit_post__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_edit_post__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/dom-ready */ \"@wordpress/dom-ready\");\n/* harmony import */ var _wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/blocks */ \"@wordpress/blocks\");\n/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__);\n\n\n\n_wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_1___default()(function () {\n  (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.unregisterBlockStyle)('core/button', 'outline');\n  (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__.registerBlockStyle)('core/button', {\n    name: 'outline',\n    label: 'Outline'\n  });\n  wp.domReady(function () {\n    // wp.data\n    //   .dispatch('core/edit-post')\n    //   .removeEditorPanel('taxonomy-panel-category');\n    wp.data.dispatch('core/edit-post').removeEditorPanel('taxonomy-panel-post_tag');\n    wp.data.dispatch('core/edit-post').removeEditorPanel('discussion-panel');\n    wp.blocks.unregisterBlockType('core/verse');\n    wp.blocks.unregisterBlockType('core/cover');\n    wp.blocks.unregisterBlockType('core/more');\n    wp.blocks.unregisterBlockType('core/code');\n    wp.blocks.unregisterBlockType('core/nextpage');\n    wp.blocks.unregisterBlockType('core/preformatted');\n    wp.blocks.unregisterBlockType('core/html');\n    wp.blocks.unregisterBlockType('core/embed');\n    wp.blocks.unregisterBlockType('core/archives');\n    wp.blocks.unregisterBlockType('core/categories');\n    wp.blocks.unregisterBlockType('core/calendar');\n    wp.blocks.unregisterBlockType('core/tag-cloud');\n    wp.blocks.unregisterBlockType('core/rss');\n    wp.blocks.unregisterBlockType('core/search');\n    wp.blocks.unregisterBlockType('core/shortcode');\n    wp.blocks.unregisterBlockType('core/latest-posts');\n    wp.blocks.unregisterBlockType('core/latest-comments');\n    wp.blocks.unregisterBlockType('core/spacer');\n    wp.blocks.unregisterBlockStyle('core/quote', 'default');\n    wp.blocks.unregisterBlockStyle('core/image', 'circle-mask');\n    wp.blocks.unregisterBlockStyle('core/image', 'rounded');\n    wp.blocks.unregisterBlockStyle('core/pullquote', 'solid-color');\n    wp.blocks.registerBlockStyle('core/paragraph', {\n      name: 'large',\n      label: 'Large'\n    });\n    wp.blocks.registerBlockStyle('core/image', {\n      name: 'cut-corner-bottom-left',\n      label: 'Cut corner (bottom left)'\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2NyaXB0cy9lZGl0b3IuanM/ZjFlMyJdLCJuYW1lcyI6WyJkb21SZWFkeSIsInVucmVnaXN0ZXJCbG9ja1N0eWxlIiwicmVnaXN0ZXJCbG9ja1N0eWxlIiwibmFtZSIsImxhYmVsIiwid3AiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7QUFBQTtBQUNBO0FBQ0E7QUFFQUEsMkRBQVEsQ0FBQyxZQUFNO0FBQ2JDLHlFQUFvQixnQkFBcEJBLFNBQW9CLENBQXBCQTtBQUVBQyx1RUFBa0IsZ0JBQWdCO0FBQ2hDQyxRQUFJLEVBRDRCO0FBRWhDQyxTQUFLLEVBQUU7QUFGeUIsR0FBaEIsQ0FBbEJGO0FBS0FHLElBQUUsQ0FBRkEsU0FBWSxZQUFZO0FBQ3RCO0FBQ0E7QUFDQTtBQUNBQSxNQUFFLENBQUZBO0FBR0FBLE1BQUUsQ0FBRkE7QUFFQUEsTUFBRSxDQUFGQTtBQUNBQSxNQUFFLENBQUZBO0FBQ0FBLE1BQUUsQ0FBRkE7QUFDQUEsTUFBRSxDQUFGQTtBQUNBQSxNQUFFLENBQUZBO0FBQ0FBLE1BQUUsQ0FBRkE7QUFDQUEsTUFBRSxDQUFGQTtBQUNBQSxNQUFFLENBQUZBO0FBQ0FBLE1BQUUsQ0FBRkE7QUFDQUEsTUFBRSxDQUFGQTtBQUNBQSxNQUFFLENBQUZBO0FBQ0FBLE1BQUUsQ0FBRkE7QUFDQUEsTUFBRSxDQUFGQTtBQUNBQSxNQUFFLENBQUZBO0FBQ0FBLE1BQUUsQ0FBRkE7QUFDQUEsTUFBRSxDQUFGQTtBQUNBQSxNQUFFLENBQUZBO0FBQ0FBLE1BQUUsQ0FBRkE7QUFFQUEsTUFBRSxDQUFGQTtBQUNBQSxNQUFFLENBQUZBO0FBQ0FBLE1BQUUsQ0FBRkE7QUFDQUEsTUFBRSxDQUFGQTtBQUVBQSxNQUFFLENBQUZBLDRDQUErQztBQUM3Q0YsVUFBSSxFQUR5QztBQUU3Q0MsV0FBSyxFQUFFO0FBRnNDLEtBQS9DQztBQUtBQSxNQUFFLENBQUZBLHdDQUEyQztBQUN6Q0YsVUFBSSxFQURxQztBQUV6Q0MsV0FBSyxFQUFFO0FBRmtDLEtBQTNDQztBQXRDRkE7QUFSRkwsQ0FBUSxDQUFSQSIsImZpbGUiOiIuL3Jlc291cmNlcy9zY3JpcHRzL2VkaXRvci5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCAnQHdvcmRwcmVzcy9lZGl0LXBvc3QnO1xuaW1wb3J0IGRvbVJlYWR5IGZyb20gJ0B3b3JkcHJlc3MvZG9tLXJlYWR5JztcbmltcG9ydCB7IHVucmVnaXN0ZXJCbG9ja1N0eWxlLCByZWdpc3RlckJsb2NrU3R5bGUgfSBmcm9tICdAd29yZHByZXNzL2Jsb2Nrcyc7XG5cbmRvbVJlYWR5KCgpID0+IHtcbiAgdW5yZWdpc3RlckJsb2NrU3R5bGUoJ2NvcmUvYnV0dG9uJywgJ291dGxpbmUnKTtcblxuICByZWdpc3RlckJsb2NrU3R5bGUoJ2NvcmUvYnV0dG9uJywge1xuICAgIG5hbWU6ICdvdXRsaW5lJyxcbiAgICBsYWJlbDogJ091dGxpbmUnLFxuICB9KTtcblxuICB3cC5kb21SZWFkeShmdW5jdGlvbiAoKSB7XG4gICAgLy8gd3AuZGF0YVxuICAgIC8vICAgLmRpc3BhdGNoKCdjb3JlL2VkaXQtcG9zdCcpXG4gICAgLy8gICAucmVtb3ZlRWRpdG9yUGFuZWwoJ3RheG9ub215LXBhbmVsLWNhdGVnb3J5Jyk7XG4gICAgd3AuZGF0YVxuICAgICAgLmRpc3BhdGNoKCdjb3JlL2VkaXQtcG9zdCcpXG4gICAgICAucmVtb3ZlRWRpdG9yUGFuZWwoJ3RheG9ub215LXBhbmVsLXBvc3RfdGFnJyk7XG4gICAgd3AuZGF0YS5kaXNwYXRjaCgnY29yZS9lZGl0LXBvc3QnKS5yZW1vdmVFZGl0b3JQYW5lbCgnZGlzY3Vzc2lvbi1wYW5lbCcpO1xuXG4gICAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1R5cGUoJ2NvcmUvdmVyc2UnKTtcbiAgICB3cC5ibG9ja3MudW5yZWdpc3RlckJsb2NrVHlwZSgnY29yZS9jb3ZlcicpO1xuICAgIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL21vcmUnKTtcbiAgICB3cC5ibG9ja3MudW5yZWdpc3RlckJsb2NrVHlwZSgnY29yZS9jb2RlJyk7XG4gICAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1R5cGUoJ2NvcmUvbmV4dHBhZ2UnKTtcbiAgICB3cC5ibG9ja3MudW5yZWdpc3RlckJsb2NrVHlwZSgnY29yZS9wcmVmb3JtYXR0ZWQnKTtcbiAgICB3cC5ibG9ja3MudW5yZWdpc3RlckJsb2NrVHlwZSgnY29yZS9odG1sJyk7XG4gICAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1R5cGUoJ2NvcmUvZW1iZWQnKTtcbiAgICB3cC5ibG9ja3MudW5yZWdpc3RlckJsb2NrVHlwZSgnY29yZS9hcmNoaXZlcycpO1xuICAgIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL2NhdGVnb3JpZXMnKTtcbiAgICB3cC5ibG9ja3MudW5yZWdpc3RlckJsb2NrVHlwZSgnY29yZS9jYWxlbmRhcicpO1xuICAgIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL3RhZy1jbG91ZCcpO1xuICAgIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL3JzcycpO1xuICAgIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL3NlYXJjaCcpO1xuICAgIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL3Nob3J0Y29kZScpO1xuICAgIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL2xhdGVzdC1wb3N0cycpO1xuICAgIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL2xhdGVzdC1jb21tZW50cycpO1xuICAgIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL3NwYWNlcicpO1xuXG4gICAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1N0eWxlKCdjb3JlL3F1b3RlJywgJ2RlZmF1bHQnKTtcbiAgICB3cC5ibG9ja3MudW5yZWdpc3RlckJsb2NrU3R5bGUoJ2NvcmUvaW1hZ2UnLCAnY2lyY2xlLW1hc2snKTtcbiAgICB3cC5ibG9ja3MudW5yZWdpc3RlckJsb2NrU3R5bGUoJ2NvcmUvaW1hZ2UnLCAncm91bmRlZCcpO1xuICAgIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tTdHlsZSgnY29yZS9wdWxscXVvdGUnLCAnc29saWQtY29sb3InKTtcblxuICAgIHdwLmJsb2Nrcy5yZWdpc3RlckJsb2NrU3R5bGUoJ2NvcmUvcGFyYWdyYXBoJywge1xuICAgICAgbmFtZTogJ2xhcmdlJyxcbiAgICAgIGxhYmVsOiAnTGFyZ2UnLFxuICAgIH0pO1xuXG4gICAgd3AuYmxvY2tzLnJlZ2lzdGVyQmxvY2tTdHlsZSgnY29yZS9pbWFnZScsIHtcbiAgICAgIG5hbWU6ICdjdXQtY29ybmVyLWJvdHRvbS1sZWZ0JyxcbiAgICAgIGxhYmVsOiAnQ3V0IGNvcm5lciAoYm90dG9tIGxlZnQpJyxcbiAgICB9KTtcbiAgfSk7XG59KTtcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/scripts/editor.js\n");

/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ (function(module) {

"use strict";
module.exports = window["wp"]["blocks"];

/***/ }),

/***/ "@wordpress/dom-ready":
/*!**********************************!*\
  !*** external ["wp","domReady"] ***!
  \**********************************/
/***/ (function(module) {

"use strict";
module.exports = window["wp"]["domReady"];

/***/ }),

/***/ "@wordpress/edit-post":
/*!**********************************!*\
  !*** external ["wp","editPost"] ***!
  \**********************************/
/***/ (function(module) {

"use strict";
module.exports = window["wp"]["editPost"];

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ var __webpack_exports__ = (__webpack_exec__("./resources/scripts/editor.js"));
/******/ }
]);