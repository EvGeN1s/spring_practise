import './theme_update_button.css';
import $ from 'jquery';

export default function setThemeUpdateButton(button, keyword) {
  const btn = $(button);

  btn.click(() => {
    $.ajax({
        url: './update',
        method: 'POST',
        data: {keyword,}
      })
      .done(() => {
        location.reload()
        })
      .fail(() => {
        alert('error: iamge\'s can\'t  be updated')
      })
  })
}