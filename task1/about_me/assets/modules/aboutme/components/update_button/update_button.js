import './update_button.css';
import $ from 'jquery';

export default function setUpdateButton(button) {
  const btn = $(button);

  btn.click(() => {
    $.ajax({
      url: '/update',
      method: 'POST',
    })
      .done(() => {
        location.reload();
      })
      .fail(() => {
        alert('error: iamge\'s can\'t  be updated');
      });
  });

}