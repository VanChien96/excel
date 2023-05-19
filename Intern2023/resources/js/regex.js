// Tất cả đều là chữ số (fullwidth)
const numberFW = "/^[０-９]+$/";
// Tất cả đều là chữ số (halfwidth)
const numberHW = "/^[0-9]+$/";
// Tất cả đều là chữ số (fullwidth, halfwidth)
const numberFHW = "/^[0-9０-９]+$/";
// Tất cả các số fullwidth (kể cả số âm, số thập phân)
const numberFW2 = "/^[ー]?[０-９]+(．[０-９]+)?$/";
// Tất cả các số halfwidth (kể cả số âm, số thập phân)
const numberHW2 = "/^[-]?[0-9]+(.[0-9]+)?$/";
// Ký tự alphabet halfwidth (chữ thường)
const strHW = "/^[a-z]+$/";
// Ký tự alphabet halfwidth (chữ in hoa)
const strHW2 = "/^[A-Z]+$/";
// Ký tự alphabet halfwidth (chữ in hoa và chữ thường)
const strHW3 = "/^[a-zA-Z]+$/";
// Ký tự alphabet halfwidth và chữ số (chữ in hoa, chữ thường, chữ số)
const strHW4 = " /^[a-zA-Z0-9]+$/";
// Ký tự Hiragana fullwidth
const strHiraFW = "/^[ぁ-ん]+$/";
// Ký tự Katakana fullwidth
const strKataFW = "/^([ァ-ン]|ー)+$/";

// Ký tự Hiragana và Katakana fullwidth
const strHiraKataFW = "/^[ぁ-んァ-ン]+$/";

// Ký tự Kana halfwidth
const strKataHW = "/^[ｧ-ﾝﾞﾟ]+$/";

// Ký tự Kanji
const strKanji = "/^[一-龥]+$/";

// Ký tự Hiragana fullwidth và Kanji
const strHiraFwKanji = "/^[一-龥ぁ-ん]/";

// Ký tự Hiragana, Katakana fullwidth và Kanji
const strHiraKataFwKanji = "/^[ぁ-んァ-ン一-龥]/";

// Trường hợp Email
const strEmail = "/^S+@S+.S+$/";

// URL
const strURL = "/^http(s)?://([w-]+.)+[w-]+(/[w-./?%&=]*)?/";

// Trường hợp số điện thoại
// Số điện thoại (không có dấu gạch ngang, 10 ký tự)
const strSDT = "/^d{10}$/";

// Số điện thoại (không có dấu gạch ngang, 11 ký tự)
const strSDT1 = "/^d{11}$/";

// Số điện thoại (không có dấu gạch ngang, 10 hoặc 11 ký tự)
const strSDT2 = "/^d{10}$|^d{11}$/";

// Trường hợp số thẻ tín dụng
const strCard =
    "/^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6011[0-9]{12}|3(?:0[0-5]|[68][0-9])[0-9]{11}|3[47][0-9]{13})$/";
