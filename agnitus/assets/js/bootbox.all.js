/*! @preserve
 * bootbox.js
 * version: 5.3.2
 * author: Nick Payne <nick@kurai.co.uk>
 * license: MIT
 * http://bootboxjs.com/
 */
(function (root, factory) {
  'use strict';
  if (typeof define === 'function' && define.amd) {
    // AMD
    define(['jquery'], factory);
  } else if (typeof exports === 'object') {
    // Node, CommonJS-like
    module.exports = factory(require('jquery'));
  } else {
    // Browser globals (root is window)
    root.bootbox = factory(root.jQuery);
  }
}(this, function init($, undefined) {
  'use strict';

  //  Polyfills Object.keys, if necessary.
  //  @see https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/keys
  if (!Object.keys) {
    Object.keys = (function () {
      var hasOwnProperty = Object.prototype.hasOwnProperty,
        hasDontEnumBug = !({ toString: null }).propertyIsEnumerable('toString'),
        dontEnums = [
          'toString',
          'toLocaleString',
          'valueOf',
          'hasOwnProperty',
          'isPrototypeOf',
          'propertyIsEnumerable',
          'constructor'
        ],
        dontEnumsLength = dontEnums.length;

      return function (obj) {
        if (typeof obj !== 'function' && (typeof obj !== 'object' || obj === null)) {
          throw new TypeError('Object.keys called on non-object');
        }

        var result = [], prop, i;

        for (prop in obj) {
          if (hasOwnProperty.call(obj, prop)) {
            result.push(prop);
          }
        }

        if (hasDontEnumBug) {
          for (i = 0; i < dontEnumsLength; i++) {
            if (hasOwnProperty.call(obj, dontEnums[i])) {
              result.push(dontEnums[i]);
            }
          }
        }

        return result;
      };
    }());
  }

  var exports = {};

  var VERSION = '5.0.0';
  exports.VERSION = VERSION;

  var locales = {
      ar : {
        OK      : 'موافق',
        CANCEL  : 'الغاء',
        CONFIRM : 'تأكيد'
      },
      bg_BG : {
        OK      : 'Ок',
        CANCEL  : 'Отказ',
        CONFIRM : 'Потвърждавам'
      },
      br : {
        OK      : 'OK',
        CANCEL  : 'Cancelar',
        CONFIRM : 'Sim'
      },
      cs : {
        OK      : 'OK',
        CANCEL  : 'Zrušit',
        CONFIRM : 'Potvrdit'
      },
      da : {
        OK      : 'OK',
        CANCEL  : 'Annuller',
        CONFIRM : 'Accepter'
      },
      de : {
        OK      : 'OK',
        CANCEL  : 'Abbrechen',
        CONFIRM : 'Akzeptieren'
      },
      el : {
        OK      : 'Εντάξει',
        CANCEL  : 'Ακύρωση',
        CONFIRM : 'Επιβεβαίωση'
      },
      en : {
        OK      : 'OK',
        CANCEL  : 'Cancel',
        CONFIRM : 'OK'
      },
      es : {
        OK      : 'OK',
        CANCEL  : 'Cancelar',
        CONFIRM : 'Aceptar'
      },
      eu : {
        OK      : 'OK',
        CANCEL  : 'Ezeztatu',
        CONFIRM : 'Onartu'
      },
      et : {
        OK      : 'OK',
        CANCEL  : 'Katkesta',
        CONFIRM : 'OK'
      },
      fa : {
        OK      : 'قبول',
        CANCEL  : 'لغو',
        CONFIRM : 'تایید'
      },
      fi : {
        OK      : 'OK',
        CANCEL  : 'Peruuta',
        CONFIRM : 'OK'
      },
      fr : {
        OK      : 'OK',
        CANCEL  : 'Annuler',
        CONFIRM : 'Confirmer'
      },
      he : {
        OK      : 'אישור',
        CANCEL  : 'ביטול',
        CONFIRM : 'אישור'
      },
      hu : {
        OK      : 'OK',
        CANCEL  : 'Mégsem',
        CONFIRM : 'Megerősít'
      },
      hr : {
        OK      : 'OK',
        CANCEL  : 'Odustani',
        CONFIRM : 'Potvrdi'
      },
      id : {
        OK      : 'OK',
        CANCEL  : 'Batal',
        CONFIRM : 'OK'
      },
      it : {
        OK      : 'OK',
        CANCEL  : 'Annulla',
        CONFIRM : 'Conferma'
      },
      ja : {
        OK      : 'OK',
        CANCEL  : 'キャンセル',
        CONFIRM : '確認'
      },
      ka : {
        OK: 'OK',
        CANCEL: 'გაუქმება',
        CONFIRM: 'დადასტურება'
      },
      ko : {
        OK: 'OK',
        CANCEL: '취소',
        CONFIRM: '확인'
      },
      lt : {
        OK      : 'Gerai',
        CANCEL  : 'Atšaukti',
        CONFIRM : 'Patvirtinti'
      },
      lv : {
        OK      : 'Labi',
        CANCEL  : 'Atcelt',
        CONFIRM : 'Apstiprināt'
      },
      nl : {
        OK      : 'OK',
        CANCEL  : 'Annuleren',
        CONFIRM : 'Accepteren'
      },
      no : {
        OK      : 'OK',
        CANCEL  : 'Avbryt',
        CONFIRM : 'OK'
      },
      pl : {
        OK      : 'OK',
        CANCEL  : 'Anuluj',
        CONFIRM : 'Potwierdź'
      },
      pt : {
        OK      : 'OK',
        CANCEL  : 'Cancelar',
        CONFIRM : 'Confirmar'
      },
      ru : {
        OK      : 'OK',
        CANCEL  : 'Отмена',
        CONFIRM : 'Применить'
      },
      sk : {
        OK      : 'OK',
        CANCEL  : 'Zrušiť',
        CONFIRM : 'Potvrdiť'
      },
      sl : {
        OK      : 'OK',
        CANCEL  : 'Prekliči',
        CONFIRM : 'Potrdi'
      },
      sq : {
        OK      : 'OK',
        CANCEL  : 'Anulo',
        CONFIRM : 'Prano'
      },
      sv : {
        OK      : 'OK',
        CANCEL  : 'Avbryt',
        CONFIRM : 'OK'
      },
      sw: {
        OK      : 'Sawa',
        CANCEL  : 'Ghairi',
        CONFIRM: 'Thibitisha'
      },
      ta:{
        OK      : 'சரி',
        CANCEL  : 'ரத்து செய்',
        CONFIRM : 'உறுதி செய்'
      },
      th : {
        OK      : 'ตกลง',
        CANCEL  : 'ยกเลิก',
        CONFIRM : 'ยืนยัน'
      },
      tr : {
        OK      : 'Tamam',
        CANCEL  : 'İptal',
        CONFIRM : 'Onayla'
      },
      uk : {
        OK      : 'OK',
        CANCEL  : 'Відміна',
        CONFIRM : 'Прийняти'
      },
      zh_CN : {
        OK      : 'OK',
        CANCEL  : '取消',
        CONFIRM : '确认'
      },
      zh_TW : {
        OK      : 'OK',
        CANCEL  : '取消',
        CONFIRM : '確認'
      }
  };

  var templates = {
    dialog:
    '<div class="bootbox modal" tabindex="-1" role="dialog" aria-hidden="true">' +
    '<div class="modal-dialog">' +
    '<div class="modal-content">' +
    '<div class="modal-body"><div class="bootbox-body"></div></div>' +
    '</div>' +
    '</div>' +
    '</div>',
    header:
    '<div class="modal-header">' +
    '<h5 class="modal-title"></h5>' +
    '</div>',
    footer:
    '<div class="modal-footer"></div>',
    closeButton:
    '<button type="button" class="bootbox-close-button close" aria-hidden="true">&times;</button>',
    form:
    '<form class="bootbox-form"></form>',
    button:
    '<button type="button" class="btn"></button>',
    option:
    '<option></option>',
    promptMessage:
    '<div class="bootbox-prompt-message"></div>',
    inputs: {
      text:
      '<input class="bootbox-input bootbox-input-text form-control" autocomplete="off" type="text" />',
      textarea:
      '<textarea class="bootbox-input bootbox-input-textarea form-control"></textarea>',
      email:
      '<input class="bootbox-input bootbox-input-email form-control" autocomplete="off" type="email" />',
      select:
      '<select class="bootbox-input bootbox-input-select form-control"></select>',
      checkbox:
      '<div class="form-check checkbox"><label class="form-check-label"><input class="form-check-input bootbox-input bootbox-input-checkbox" type="checkbox" /></label></div>',
      radio:
      '<div class="form-check radio"><label class="form-check-label"><input class="form-check-input bootbox-input bootbox-input-radio" type="radio" name="bootbox-radio" /></label></div>',
      date:
      '<input class="bootbox-input bootbox-input-date form-control" autocomplete="off" type="date" />',
      time:
      '<input class="bootbox-input bootbox-input-time form-control" autocomplete="off" type="time" />',
      number:
      '<input class="bootbox-input bootbox-input-number form-control" autocomplete="off" type="number" />',
      password:
      '<input class="bootbox-input bootbox-input-password form-control" autocomplete="off" type="password" />',
      range:
      '<input class="bootbox-input bootbox-input-range form-control-range" autocomplete="off" type="range" />'
    }
  };
