import { DOM } from "./DOM/DOM";

let dom = new DOM;

const POST_URL = '/ajax-forms.php?action=read_page';

const TIMER = 5000;

export const sendReadedArticle = wrap => {
  let container = dom.getContainer(wrap);
  if (!container) return;


  let idInput = dom.findFirst('input[name="artPageId"]', container);
  if (!idInput) return;


  let val = idInput.getAttribute('value');

  setTimeout(() => {
    init(val);
  }, TIMER);
}



const init = val => {
  let http = new XMLHttpRequest;
  http.open('POST', POST_URL);
  let form = new FormData();
  form.append('page', val);
  http.send(form);
}

