import { DOM } from "./DOM/DOM";
let dom = new DOM;

const LOGIN_BTNS = [
  ['#realVkLogin', '.logn-vk-btn'],
  ['#realFbLogin', '.login-fb-btn'],
];


export const socialLogin = () => {

  // LOGIN_BTNS.forEach(arr => {
  //   let real = dom.findFirst(arr[0]);
  //   real.addEventListener('click', e => {
  //     e.preventDefault();
  //     console.log(e);
  //   })
  // });

  LOGIN_BTNS.forEach(arr => {
    let real = dom.findFirst(arr[0]);
    let btns = dom.findAll(arr[1]);

    if (!real || !btns || !btns.length) return;

    btns.forEach(btn => btn.addEventListener('click', e => onLoginClick(e, real)));
  });
}



const onLoginClick = (e, real) => {
  e.preventDefault();
  dom.dispath(real, 'click');
}