/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/modal.js":
/*!*******************************!*\
  !*** ./resources/js/modal.js ***!
  \*******************************/
/***/ (() => {

eval("window.showCarousel = function showCarousel(modalType) {\n  //Disable scrolling\n  var body = document.getElementsByTagName(\"BODY\")[0];\n  body.classList.add('overflow-hidden');\n  switch (modalType) {\n    case 'learner':\n      document.getElementById('learnerCarousel').style.display = 'block';\n      break;\n    case 'teacher':\n      document.getElementById('teacherCarousel').style.display = 'block';\n      break;\n    case 'exchange':\n      document.getElementById('exchangeCarousel').style.display = 'block';\n      break;\n  }\n};\n\n// close button\nwindow.closeCarousel = function closeCarousel(carouselType) {\n  //Enable scrolling\n  var body = document.getElementsByTagName(\"BODY\")[0];\n  body.classList.remove('overflow-hidden');\n  switch (carouselType) {\n    case 'learner':\n      document.getElementById('learnerCarousel').style.display = 'none';\n      break;\n    case 'teacher':\n      document.getElementById('teacherCarousel').style.display = 'none';\n      break;\n    case 'exchange':\n      document.getElementById('exchangeCarousel').style.display = 'none';\n      break;\n  }\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvbW9kYWwuanMuanMiLCJuYW1lcyI6WyJ3aW5kb3ciLCJzaG93Q2Fyb3VzZWwiLCJtb2RhbFR5cGUiLCJib2R5IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsImNsYXNzTGlzdCIsImFkZCIsImdldEVsZW1lbnRCeUlkIiwic3R5bGUiLCJkaXNwbGF5IiwiY2xvc2VDYXJvdXNlbCIsImNhcm91c2VsVHlwZSIsInJlbW92ZSJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL21vZGFsLmpzP2MyNzQiXSwic291cmNlc0NvbnRlbnQiOlsid2luZG93LnNob3dDYXJvdXNlbCA9IGZ1bmN0aW9uIHNob3dDYXJvdXNlbChtb2RhbFR5cGUpXG57XG4gICAgLy9EaXNhYmxlIHNjcm9sbGluZ1xuICAgIHZhciBib2R5ID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeVRhZ05hbWUoXCJCT0RZXCIpWzBdO1xuICAgIGJvZHkuY2xhc3NMaXN0LmFkZCgnb3ZlcmZsb3ctaGlkZGVuJyk7XG5cbiAgICBzd2l0Y2ggKG1vZGFsVHlwZSlcbiAgICB7XG4gICAgICAgIGNhc2UgJ2xlYXJuZXInOlxuICAgICAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2xlYXJuZXJDYXJvdXNlbCcpLnN0eWxlLmRpc3BsYXkgPSAnYmxvY2snO1xuICAgICAgICAgICAgYnJlYWs7XG4gICAgICAgIGNhc2UgJ3RlYWNoZXInOlxuICAgICAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3RlYWNoZXJDYXJvdXNlbCcpLnN0eWxlLmRpc3BsYXkgPSAnYmxvY2snO1xuICAgICAgICAgICAgYnJlYWs7XG4gICAgICAgIGNhc2UgJ2V4Y2hhbmdlJzpcbiAgICAgICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdleGNoYW5nZUNhcm91c2VsJykuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7XG4gICAgICAgICAgICBicmVhaztcbiAgICB9XG59XG5cbi8vIGNsb3NlIGJ1dHRvblxud2luZG93LmNsb3NlQ2Fyb3VzZWwgPSBmdW5jdGlvbiBjbG9zZUNhcm91c2VsKGNhcm91c2VsVHlwZSlcbntcbiAgICAvL0VuYWJsZSBzY3JvbGxpbmdcbiAgICB2YXIgYm9keSA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKFwiQk9EWVwiKVswXTtcbiAgICBib2R5LmNsYXNzTGlzdC5yZW1vdmUoJ292ZXJmbG93LWhpZGRlbicpO1xuXG4gICAgc3dpdGNoIChjYXJvdXNlbFR5cGUpXG4gICAge1xuICAgICAgICBjYXNlICdsZWFybmVyJzpcbiAgICAgICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsZWFybmVyQ2Fyb3VzZWwnKS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xuICAgICAgICAgICAgYnJlYWs7XG5cbiAgICAgICAgY2FzZSAndGVhY2hlcic6XG4gICAgICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndGVhY2hlckNhcm91c2VsJykuc3R5bGUuZGlzcGxheSA9ICdub25lJztcbiAgICAgICAgICAgIGJyZWFrO1xuXG4gICAgICAgIGNhc2UgJ2V4Y2hhbmdlJzpcbiAgICAgICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdleGNoYW5nZUNhcm91c2VsJykuc3R5bGUuZGlzcGxheSA9ICdub25lJztcbiAgICAgICAgICAgIGJyZWFrO1xuICAgIH1cbn1cblxuXG4iXSwibWFwcGluZ3MiOiJBQUFBQSxNQUFNLENBQUNDLFlBQVksR0FBRyxTQUFTQSxZQUFZQSxDQUFDQyxTQUFTLEVBQ3JEO0VBQ0k7RUFDQSxJQUFJQyxJQUFJLEdBQUdDLFFBQVEsQ0FBQ0Msb0JBQW9CLENBQUMsTUFBTSxDQUFDLENBQUMsQ0FBQyxDQUFDO0VBQ25ERixJQUFJLENBQUNHLFNBQVMsQ0FBQ0MsR0FBRyxDQUFDLGlCQUFpQixDQUFDO0VBRXJDLFFBQVFMLFNBQVM7SUFFYixLQUFLLFNBQVM7TUFDVkUsUUFBUSxDQUFDSSxjQUFjLENBQUMsaUJBQWlCLENBQUMsQ0FBQ0MsS0FBSyxDQUFDQyxPQUFPLEdBQUcsT0FBTztNQUNsRTtJQUNKLEtBQUssU0FBUztNQUNWTixRQUFRLENBQUNJLGNBQWMsQ0FBQyxpQkFBaUIsQ0FBQyxDQUFDQyxLQUFLLENBQUNDLE9BQU8sR0FBRyxPQUFPO01BQ2xFO0lBQ0osS0FBSyxVQUFVO01BQ1hOLFFBQVEsQ0FBQ0ksY0FBYyxDQUFDLGtCQUFrQixDQUFDLENBQUNDLEtBQUssQ0FBQ0MsT0FBTyxHQUFHLE9BQU87TUFDbkU7RUFBTTtBQUVsQixDQUFDOztBQUVEO0FBQ0FWLE1BQU0sQ0FBQ1csYUFBYSxHQUFHLFNBQVNBLGFBQWFBLENBQUNDLFlBQVksRUFDMUQ7RUFDSTtFQUNBLElBQUlULElBQUksR0FBR0MsUUFBUSxDQUFDQyxvQkFBb0IsQ0FBQyxNQUFNLENBQUMsQ0FBQyxDQUFDLENBQUM7RUFDbkRGLElBQUksQ0FBQ0csU0FBUyxDQUFDTyxNQUFNLENBQUMsaUJBQWlCLENBQUM7RUFFeEMsUUFBUUQsWUFBWTtJQUVoQixLQUFLLFNBQVM7TUFDVlIsUUFBUSxDQUFDSSxjQUFjLENBQUMsaUJBQWlCLENBQUMsQ0FBQ0MsS0FBSyxDQUFDQyxPQUFPLEdBQUcsTUFBTTtNQUNqRTtJQUVKLEtBQUssU0FBUztNQUNWTixRQUFRLENBQUNJLGNBQWMsQ0FBQyxpQkFBaUIsQ0FBQyxDQUFDQyxLQUFLLENBQUNDLE9BQU8sR0FBRyxNQUFNO01BQ2pFO0lBRUosS0FBSyxVQUFVO01BQ1hOLFFBQVEsQ0FBQ0ksY0FBYyxDQUFDLGtCQUFrQixDQUFDLENBQUNDLEtBQUssQ0FBQ0MsT0FBTyxHQUFHLE1BQU07TUFDbEU7RUFBTTtBQUVsQixDQUFDIn0=\n//# sourceURL=webpack-internal:///./resources/js/modal.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/modal.js"]();
/******/ 	
/******/ })()
;