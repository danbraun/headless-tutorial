var ViewModel = function() {
	this.search = ko.observable();
	this.results = ko.observableArray();

	this.letsGo = function() {
        this.results([]); // empty it out
        for (var i = 0; i < 5; i++) {
		    this.results.push(this.randomWord());
        }
	}

	this.randomWord = function() {
		var words = ['affair',
    		'air',
    		'anger',
    		'amber',
    		'adviser',
    		'answer',
     		'appear',
    		'auditor',
    		'ancestor',
    		'youth',
    		'yearn',
    		'young',
    		'yard',
    		'year',
    		'difficult',
    		'detective',
    		'divide',
    		'doctor',
    		'dough',
    		'drawer',
    		'depart',
    		'decisive',
    		'difficulty',
    		'damage',
    		'puppetter',
    		'karma',
    		'mocha',
    		'java',
    		'chai',
    		'php',
    		'javascript',
            'organize',
            'official',
            'offensive',
            'onion',
            'opera',
            'owl',
            'owe',
            'obstacle',
            'offer',
            'opposition',
            'oral',
            'overcharge',
            'overall',
            'open',
            'opinion',
            'oven',
            'offset',
            'right',
            'recycle',
            'residence',
            'revolution',
            'restrain',
            'ratio',
            'representative',
            'resident',
            'relinquish',
            'rebel',
            'reflection',
            'quarter',
            'qualified',
            'quotation',
            'quantity',
            'quality',
            'qualify',
            'quarrel',
            'question',
            'quit',
            'queen',
            'aardig',
            'fietsenrek',
            'vernieuwen',
            'minibieb',
            'lenen',
            'ruilen',
            'tekeergaan'
    		];

    	var index = Math.floor(Math.random() * words.length);

    	return words[index];
	}
}

var myModel = new ViewModel()
ko.applyBindings(myModel);