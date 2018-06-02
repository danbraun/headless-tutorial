const puppeteer = require('puppeteer');
const { expect } = require('chai');
const devices = require('puppeteer/DeviceDescriptors');

describe('Emulate a device', function() {
	let page;
	let browser;

	before(async function(){
		browser = await puppeteer.launch();
  		page = await browser.newPage();
  		page.emulate(devices['iPhone X']);
  		await page.goto('http://localhost:8000/ex9.php');
	});

	it('user agent should match iphone X', async function () {
		const userAgent = await page.evaluate(() => document.querySelector('#user-agent').innerText);
		expect(userAgent).to.contains('iPhone');
	    await page.screenshot({ path: 'output/screenshot-iphone.png', fullPage: true })
	});

	after (async function () {
	    await browser.close();
	});
});


