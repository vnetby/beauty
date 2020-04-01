import { DOM } from "../DOM/DOM";

let dom = new DOM;


export const oldArtFloat = wrap => {
  let container = dom.getContainer(wrap);
  if (!container) return;
  let p = dom.findAll('p', container);

  if (!p || !p.length) return;

  p.forEach(item => checkFloat(item));
}



const checkFloat = item => {
  let style = item.getAttribute('style');
  if (!style) return;

  let align;
  if (style.match(/text-align[\s]*:[\s]*right/)) align = 'right';
  if (style.match(/text-align[\s]*:[\s]*left/)) align = 'left';
  if (style.match(/text-align[\s]*:[\s]*center/)) align = 'center';

  if (!align) return;

  addFloatByAlign(item, align);
}



const addFloatByAlign = (item, align) => {
  if (align === 'center') return;

  dom.addClass(item, `float-${align}`);
}