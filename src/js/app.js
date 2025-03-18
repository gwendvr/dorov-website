document.addEventListener('DOMContentLoaded', async () => {
    //header
    const headerResponse = await fetch('../components/header.html');
    const headerHtml = await headerResponse.text();
    document.getElementById('header-container').innerHTML = headerHtml;

    //footer
    const footerResponse = await fetch('../components/footer.html');
    const footerHtml = await footerResponse.text();
    document.getElementById('footer-container').innerHTML = footerHtml;
}); 