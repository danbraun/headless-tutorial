const puppeteer = require('puppeteer');
const { expect } = require('chai');

describe('Test Dialog Box', function() {
	let page;
	let browser;

	before(async function(){
		browser = await puppeteer.launch();
  		page = await browser.newPage();
  		await page.goto('http://localhost:8000/ex2.php');
	});

	it('should have the correct page title', async function () {
	    expect(await page.title()).to.eql('Goedemiddag Amsterdam');
	});

	it('dialog box should open on button click', async function () {
		await page.click('#modalButton');
		const className = await page.evaluate(() => document.querySelector('body').className);
		expect(className).to.eql('modal-open');

	});

	after (async function () {
	    await browser.close();
	});
});


