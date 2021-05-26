import './update_button.css';

export default function setUpdateButton(btn) {
  const updateButton = document.getElementById(btn);
  console.log('hey');
  updateButton.addEventListener('click', async () => {
    const request = await fetch('/update');
    let result = await request;
    if (result.ok)
    {
      document.location.reload(true);
    } else {
      alert("Something go wrong. Images wasn't found");
    }
  })
}