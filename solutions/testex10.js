const puppeteer = require('puppeteer');
const { expect } = require('chai');

describe('Test logging in.', function() {
	let page;
	let browser;

	before(async function(){
		browser = await puppeteer.launch();
  		page = await browser.newPage();
  		await page.goto('http://localhost:8000/ex10.php');
	});

	it('user should not be logged in', async function () {
		await page.type('#email', 'derek@example.com');
		await page.click('#login');
		await page.waitForNavigation({waitUntil: 'load'});
		expect(page.url()).to.eql('http://localhost:8000/ex10.php?message=Login%20Failed');
	    await page.screenshot({ path: 'output/screenshot-notloggedin.png', fullPage: true });
	});

	it('user should be logged in', async function () {
		await page.type('#email', 'derek@example.com');
		await page.type('#password', 'MySecr3t');
		await page.click('#login');
		await page.waitForNavigation({waitUntil: 'load'});
		expect(page.url()).to.eql('http://localhost:8000/ex10-account.php');
	    await page.screenshot({ path: 'output/screenshot-loggedin.png', fullPage: true });

	    const userName = await page.evaluate(() => document.querySelector('#user-name').text);
	    expect(userName).to.eql('derek@example.com')

	});

	after (async function () {
	    await browser.close();
	});
});


