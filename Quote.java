 
import java.io.Serializable;
import java.util.*

/**
 * 
 * @author Talon & Troy
 */
public abstract class Quote implements Serializable //, Comparable
{
	protected int clientId;
	protected double gallonsRequested;
	protected Date deliveryDate;
	protected Date requestDate;
	protected String deliveryLocation;
	protected String deliveryContactName;
	protected String deliveryContactPhone;
	protected String deliveryContactEmail;
	protected double suggestedPrice;
	protected double totalAmountDue;
	
	/**
	 * Constructor initiliazes a PackageOrder objects with the provided value
	 * @param clientId
	 * @param gallonsRequested
	 * @param deliveryDate
	 * @param requestDate
	 * @param deliveryLocation
	 * @param deliveryContactName
	 * @param deliveryContactPhone
	 * @param deliveryContactEmail
	 * @param suggestedPrice
	 * @param totalAmountDue
	 */
	 
	protected Package(int clientId, double gallonsRequested, Date deliveryDate,
					  Date requestDate, String deliveryLocation, String deliveryContactName, 
					  String deliveryContactPhone, String deliveryContactEmail, 
					  double suggestedPrice, double totalAmountDue){
		
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
	
	/**
	 * Set the client ID
	 * @param clientId
	 */
	public void setId(int clientId){
		this.clientId = clientId;
	}
	
	/**
	 * get the client ID
	 * @return clientId
	 */
	public int getClientId(){
		return this.clientId;
	}
	
	/**
	 * set the gallons requested
	 * @param gallonsRequested
	 */
	public void setGallonsRequested(double gallonsRequested){
		this.gallonsRequested = gallonsRequested;
	}
	
	/**
	 * get the gallons requested
	 * @return gallonsRequested
	 */
	public double getGallonsRequested(){
		return this.gallonsRequested;
	}
	
	/**
	 * Set the delivery date
	 * @param deliveryDate
	 */
	public void setDeliveryDate(Date deliveryDate){
		this.deliveryDate = deliveryDate;
	}
	
	/**
	 * get the delivery date
	 * @return deliveryDate
	 */
	public Date getDeliveryDate(){
		return this.deliveryDate;
	}
	
	/**
	 * Set the request date
	 * @param requestDate
	 */
	public void setRequestDate(String requestDate){
		this.requestDate = requestDate;
	}
	
	/**
	 * get the request date
	 * @return requestDate
	 */
	public String getRequestDate(){
		return this.requestDate;
	}
	
	/**
	 * Set the delivery location
	 * @param deliveryLocation
	 */
	public void setDeliveryLocation(String deliveryLocation){
		this.deliveryLocation = deliveryLocation;
	}
	
	/**
	 * get the delivery location
	 * @return deliveryLocation
	 */
	public String getDeliveryLocation(){
		return this.deliveryLocation;
	}
	
	/**
	 * Set the delivery contact name
	 * @param deliveryContactName
	 */
	public void setDeliveryContactName(String deliveryContactName){
		this.deliveryContactName = deliveryContactName;
	}
	
	/**
	 * get the delivery contact name
	 * @return deliveryContactName
	 */
	public String getDeliveryContactName(){
		return this.deliveryContactName;
	}
	
	/**
	 * Set the delivery contact phone
	 * @param deliveryContactPhone
	 */
	public void setDeliveryContactPhone(String deliveryContactPhone){
		this.deliveryContactPhone = deliveryContactPhone;
	}
	
	/**
	 * get the delivery contact phone
	 * @return deliveryContactPhone
	 */
	public String getDeliveryContactPhone(){
		return this.deliveryContactPhone;
	}
	
	/**
	 * Set the delivery contact email
	 * @param deliveryContactEmail
	 */
	public void setDeliveryContactEmail(String deliveryContactEmail){
		this.deliveryContactEmail = deliveryContactEmail;
	}
	
	/**
	 * get the delivery contact email
	 * @return deliveryContactEmail
	 */
	public String getDeliveryContactEmail(){
		return this.deliveryContactEmail;
	}
	
	/**
	 * set the suggested price
	 * @param suggestedPrice
	 */
	public void setSuggestedPrice(double suggestedPrice){
		this.suggestedPrice = suggestedPrice;
	}
	
	/**
	 * get the suggested price
	 * @return suggestedPrice
	 */
	public double getSuggestedPrice(){
		return this.suggestedPrice;
	}
	
	/**
	 * set the total amount due
	 * @param totalAmountDue
	 */
	public void setTotalAmountDue(double totalAmountDue){
		this.totalAmountDue = totalAmountDue;
	}
	
	/**
	 * get the total amount due
	 * @return totalAmountDue
	 */
	public double getTotalAmountDue(){
		return this.totalAmountDue;
	}
}
