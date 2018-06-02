const puppeteer = require('puppeteer');
const { expect } = require('chai');

describe('Test CSS hover', function() {
	let page;
	let browser;

	before(async function(){
		browser = await puppeteer.launch();
  		page = await browser.newPage();
  		await page.goto('http://localhost:8000/ex6.php');
	});

	it('should have the correct page title', async function () {
	    expect(await page.title()).to.eql('Goedemiddag Amsterdam');
	    await page.screenshot({ path: 'output/screenshot1.png', fullPage: true })
	});

	it('hover should turn button blue', async function () {
		await page.hover('#clearListButton');
		const colorOfButton = await page.evaluate(() => {
			const button = document.querySelector('#clearListButton');
			return getComputedStyle(button).getPropertyValue("background-color");;
		});
		expect(colorOfButton).to.eql('rgb(108, 117, 125)');
		await page.screenshot({ path: 'output/screenshot2.png', fullPage: true })
	});

	after (async function () {
	    await browser.close();
	});
});


