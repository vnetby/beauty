import { DOM } from "./DOM/DOM";

let dom = new DOM;

export const fixAdriverEmptyBanner = wrap => {
  let container = dom.getContainer(wrap);
  if (!container) return;

  if (adriver.checkLoadComplete()) {
    initFix();
  } else {
    adriver.onLoadComplete(() => initFix());
  }

}



const initFix = () => {
  for (let key in adriver.items) {
    let item = adriver.items[key];
    let id = item.adid;
    if (parseInt(id) === 0) appendEmptyBanner(item);
  }
}




const appendEmptyBanner = item => {
  return;
  let bannerWrap = findBannerWrap(item.p);
  if (bannerWrap.tagName) {
    let replace = dom.create('div');
    replace.style.display = 'none';
    bannerWrap.parentNode.replaceChild(replace, bannerWrap);
  }
}


const findBannerWrap = item => {
  let res = item.parentNode;
  while (!res.tagName || !res.classList.contains('banner')) {
    res = res.parentNode;
  }
  return res;
}