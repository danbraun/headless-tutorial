const puppeteer = require('puppeteer');
const { expect } = require('chai');

describe('Test search results', function() {
	let page;
	let browser;

	before(async function(){
		browser = await puppeteer.launch();
  		page = await browser.newPage();
  		await page.goto('http://localhost:8000/ex5.php');
	});

	it('should have the correct page title', async function () {
	    expect(await page.title()).to.eql('Goedemiddag Amsterdam');
	    await page.screenshot({ path: 'output/screenshot1.png', fullPage: true })
	});

	it('search should give list of results', async function () {
		await page.type('input[name=search]', 'zoeken');
		await page.click('#searchButton');
		const noOfItems = await page.evaluate(() => 
			document.querySelectorAll('li.resultItem').length);
		expect(noOfItems).to.eql(5);
	});

	after (async function () {
	    await browser.close();
	});
});


