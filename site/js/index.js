import '@babel/polyfill';

import '../css/main.less';

window.BH = {};
window.BH.mobile = document.body.dataset.mobile || 576;
window.BH.tablet = document.body.dataset.tablet || 992;
window.BH.dektop = document.body.dataset.desktop || 1280;

window.BH.jsInfoBlockBreakpoint = 'tablet';
window.BH.headerBreakpoint = 'tablet';

$.fancybox.defaults.smallBtn = false;
$.fancybox.defaults.touch = false;


import { objectFit } from './ie_fix.js';

import { addBrowserClass } from './browserDetect.js';

addBrowserClass();

import { Header } from './Header/index.js';

import { initSliders } from './sliders.js';

import { showPassword } from './Forms/index.js';

import { loginModal, subscribeModal, dismissModal } from './Modals/index.js';

import { Tabs } from './Tabs.js';

import { ArticlePage } from './ArticlePage/index.js';

import { AjaxImage } from './AjaxImage.js';

import { JsInfoBlock } from './JsInfoBlock.js';

import { AjaxForm } from './AjaxForm.js';

import { AjaxSearch } from './AjaxSearch.js';

import { ArtFooter } from './ArtFooter.js';

import { AjaxSaveBookmarks } from './AjaxSaveBookmarks.js';

// import { AjaxBattle } from './AjaxBattle.js';
import { initAjaxBattle } from './AjaxBattle.js';

import { LoadPreviewImage } from './LoadPreviewImage.js';

import { AjaxTest } from './AjaxTest.js';

import { AjaxQuiz } from './AjaxQuiz.js';

import { FormValidate } from './FormValidate.js';

// import { AnimateClick } from './AnimateClick.js';

// import { artLoopBanners } from "./artLoopBanners";

import { oldArtFullSliderNav } from "./fixOldArticleHTML/oldArtFullSliderNav.js";
import { oldArtBigSlider } from "./fixOldArticleHTML/oldArtBigSlider.js";
import { oldArtAuthorBlock } from "./fixOldArticleHTML/oldArtAuthorBlock.js";
import { oldArtFixBanner } from "./fixOldArticleHTML/oldArtFixBanner";
import { oldArtBlockquote } from "./fixOldArticleHTML/oldArtBlockquote";
import { oldArtRemoveUnusedElements } from "./fixOldArticleHTML/oldArtRemoveUnusedElements";
import { oldArtFixTest } from "./fixOldArticleHTML/oldArtFixTest";
import { oldArtFixQuiz } from "./fixOldArticleHTML/oldArtFixQuiz";
import { oldArtFloat } from "./fixOldArticleHTML/oldArtFloat";
import { fixAdriverEmptyBanner } from "./fixAdriverEmptyBanner";

import { sendReadedArticle } from "./sendReadedArticle";
import { socialLogin } from "./socialLogin";


export const dynamicScripts = (container) => {
  objectFit(container);
  new AjaxImage(container);
  initSliders(container);
  showPassword(container);
  new JsInfoBlock(container);
  new AjaxForm(container);
  new ArtFooter(container);
  new AjaxSaveBookmarks(container);
  new initAjaxBattle(container);
  new LoadPreviewImage(container);
  new AjaxTest(container);
  new AjaxQuiz(container);
  dismissModal(container);
  new FormValidate(container);



  oldArtFullSliderNav(container);
  oldArtBigSlider(container);
  oldArtAuthorBlock(container);
  oldArtBlockquote(container);
  oldArtRemoveUnusedElements(container);
  oldArtFixTest(container);
  oldArtFloat(container);

  oldArtFixQuiz(container, !!container);

  fixAdriverEmptyBanner(container);

  oldArtFixBanner(container);


  sendReadedArticle(container);

}



export const staticScripts = () => {
  new Header();
  loginModal();
  subscribeModal();
  new ArticlePage;
  new AjaxSearch;
  socialLogin();
}


staticScripts();

dynamicScripts();



