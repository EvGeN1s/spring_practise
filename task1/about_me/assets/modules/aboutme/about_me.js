import './about_me.css';
import $ from 'jquery';
import './components/slider/Slider.js';
import './components/update_button/update_button.js'

import Slider from "./components/slider/Slider";
import {setUpdateButton} from "./components/update_button/update_button";

const SLIDER1 = new Slider(".slidewrapper_1", ".images_1",
  ".next-btn_1", ".prev-btn_1", ".slide-nav-btn_1"
);
const SLIDER2 = new Slider(".slidewrapper_2", ".images_2",
  ".next-btn_2", ".prev-btn_2", ".slide-nav-btn_2"
);
const SLIDER3 = new Slider(".slidewrapper_3", ".images_3",
  ".next-btn_3", ".prev-btn_3", ".slide-nav-btn_3"
);

$(document).ready(function () {
  setUpdateButton('updater');
  SLIDER1.initialize();
  SLIDER2.initialize();
  SLIDER3.initialize();
})