const options = [
    {
        name: "USDT",
        image: "../../../images/usdt.png",
        text: "0xB9C10Aee013543b5293bCc56bA3F9ca97e487F9A"
    },
    {
        name: "ETH",
        image: "../../../images/eth.png",
        text: " 0xB9C10Aee013543b5293bCc56bA3F9ca97e487F9A"
    },
    {
        name: "BTC",
        image: "../../../images/btc.png",
        text: " bc1qdcntwzqu8lxdcevu3ztjye3zvvfxq7unsdpu37"
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