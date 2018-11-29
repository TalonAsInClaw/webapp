/**
 * 
 */
class ClientInformation{
 constructor(clientId, name, address, 
					phone, email) {
        this.clientId = clientId;
        this.name = name;
		this.address = address;
		this.phone = phone;
		this.email = email;
    }

}

const clientinfo = new ClientInformation(12345,"joe","123 fake ln.","1231231234","myemail@yoyo.com" )