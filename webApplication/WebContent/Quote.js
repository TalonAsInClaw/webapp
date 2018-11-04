/**
 * 
 */
class Quote {
	constructor(clientId, gallonsRequested, deliveryDate, requestDate, 
				deliveryLocation, deliveryContactName, deliveryContactPhone, 
				deliveryContactEmail, suggestedPrice, totalAmountDue){
		this.clientId = clientId;
		this.gallonsRequested = gallonsRequested;
		this.deliveryDate = deliveryDate;
		this.requestDate = requestDate;
		this.deliveryLocation = deliveryLocation;
		this.deliveryContactName = deliveryContactName;
		this.deliveryContactPhone = deliveryContactPhone;
		this.deliveryContactEmail = deliveryContactEmail;
		this.suggestedPrice = suggestedPrice;
		this.totalAmountDue = totalAmountDue;
	}
	
}

const q = new Quote(0,0,"00/00/0000","00/00/0000","yo","yo","0000000000","0@0.com",0.00,0.00);
console.log(q);