import './update_button.css';


export function setUpdateButton(btn) {


  const UPDATE_BUTTON = document.getElementsByClassName(btn)

  UPDATE_BUTTON.addEventListener('click', async () => {
    const request = await fetch('/update', {
      method: 'POST',
      body: JSON.stringify({})
    });

    let result = await request;

    if (result.status === 200) {
      location.reload();
    } else {
      alert("Something go wrong. Images wasn't finded");
    }

  })
}