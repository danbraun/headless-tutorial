const puppeteer = require('puppeteer');
const { expect } = require('chai');

describe('Screenshots at different screen sizes', function() {
	let page;
	let browser;

	before(async function(){
		browser = await puppeteer.launch();
  		page = await browser.newPage();
  		await page.goto('http://localhost:8000/ex8.php');
	});

	it('should have the correct page title', async function () {
	    expect(await page.title()).to.eql('Goedemiddag Amsterdam');
	    await page.screenshot({ path: 'output/screenshot1.png', fullPage: true })
	});

	it('set standard viewport', async function () {
		await page.setViewport({width: 1200, height: 800, deviceScaleFactor: 1});
		await page.screenshot({ path: 'output/screenshot-std-size.png', fullPage: true })
	});

	it('set mobile viewport', async function () {
		await page.setViewport({width: 300, height: 200, deviceScaleFactor: 1});
		await page.screenshot({ path: 'output/screenshot-mobile-size.png', fullPage: true })
	});

	it('set tablet viewport', async function () {
		await page.setViewport({width: 800, height: 600, deviceScaleFactor: 1});
		await page.screenshot({ path: 'output/screenshot-tablet-size.png', fullPage: true })
	});

	it('set zoomed in viewport', async function () {
		await page.setViewport({width: 1200, height: 800, deviceScaleFactor: 4});
		await page.screenshot({ path: 'output/screenshot-zoomed-size.png', fullPage: true })
	});

	it('set iphone emulation', async function () {
		await page.setViewport({width: 300, height: 200, deviceScaleFactor: 1});
		await page.screenshot({ path: 'output/screenshot-mobile-size.png', fullPage: true })
	});

	after (async function () {
	    await browser.close();
	});
});


