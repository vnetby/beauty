import { DOM } from "../DOM/DOM";
import { React } from "../React";

const dom = new DOM;

export const oldArtBlockquote = wrap => {
  let container = dom.getContainer(wrap);
  if (!container) return;


  let quotes = dom.findAll('.main-quote', container);


  if (quotes && quotes.length) {
    quotes.forEach(item => {
      setBlockQuote({ item });
    });
  }


  let pQuotes = dom.findAll('.quote', container);

  if (pQuotes && pQuotes.length) {
    pQuotes.forEach(item => {
      setPblockQuote({ item });
    });
  }

}




const setPblockQuote = ({ item }) => {
  let content = item.innerHTML;
  let blockQuote = createBlockquote({ content, className: 'single-row' });
  item.parentNode.replaceChild(blockQuote, item);
}





const setBlockQuote = ({ item }) => {
  let content = dom.findFirst('.main-quote-content', item);
  if (!content) return;

  content = content.innerHTML;

  let blockQuote = createBlockquote({ content });

  item.parentNode.replaceChild(blockQuote, item);
}





const createBlockquote = ({ content, className }) => {

  let res = (
    <div className={className ? 'citation-wrap ' + className : 'citation-wrap'}>
      <div className="dashed-border citation pt-4 pb-4 mb-4 center">
        <div className="content fs-l mb-0"></div>
      </div>
    </div>
  );

  // <h3 className="fs-l mb-0">{content}</h3>

  dom.findFirst('.content', res).innerHTML = content;
  return res;

}