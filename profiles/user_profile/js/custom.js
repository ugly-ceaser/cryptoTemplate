const options = [
    {
        name: "USDT",
        image: "../../../images/usdt.png",
        text: " USDT Address"
    },
    {
        name: "ETH",
        image: "../../../images/eth.png",
        text: " ETH address"
    },
    {
        name: "BTC",
        image: "../../../images/btc.png",
        text: " BTC address"
    },
];


const selectInput = document.querySelector("#select")
const textBox = document.querySelector("#textBox")
const image = document.querySelector("#img")

selectInput.addEventListener("change", () => {
    const value = selectInput.value

    const item = options.find(item => item.name.toLowerCase() === value)
    image.src = item.image
    textBox.innerHTML = item.text

})