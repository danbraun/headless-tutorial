 const puppeteer = require('puppeteer');
const { expect } = require('chai');

describe('Test Page One', function() {
	let page;
	let browser;

	before(async function(){
		//browser = await puppeteer.launch({headless: false});
		browser = await puppeteer.launch();
  		page = await browser.newPage();
  		await page.goto('http://localhost:8000');
	});

	it('should have the correct page title', async function () {
	    expect(await page.title()).to.eql('Goedemiddag Amsterdam');
	});

	after (async function () {
	    await browser.close();
	});
});


