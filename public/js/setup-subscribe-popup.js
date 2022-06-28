function setupSubscribePopup(popupId, actionUrl, titleId, titleText){
    const popup = document.getElementById(popupId);
    popup.classList.add('active');
    const form = popup.firstElementChild;
    form.setAttribute('action', actionUrl);

    const title = document.getElementById(titleId);
    title.textContent = titleText;
}

