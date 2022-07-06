// ==UserScript==
// @name         Google-Bot
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  For google
// @author       Vladislav Petrov
// @match        https://www.google.com/*
// @icon         data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
// @grant        none
// ==/UserScript==

let keywords = ["10 самых популярных шрифтов от Google", "вывод произвольных полей wordpress", "Отключение редакций и ревизий в Wordpress"];
let keyword = keywords[getRandom(0, keywords.length)];
let links = document.links;
let googleInput = document.getElementsByName("q")[0];
let btnk = document.getElementsByName("btnK")[0]

if (btnk !== undefined) {
   googleInput.value = keyword;
   btnk.click();
}else{
for (let i = 0; i < links.length; i++) {
if (links[i].href.includes("napli.ru")) console.log("Нашел строку " + links[i]);
}
}
function getRandom (min, max) {
  return Math.floor(Math.random()*(max - min) + min);
}
