package webApplication;

import java.io.Serializable;

/**
 *
 * @author Talon & Troy
 */
public abstract class ClientInformation implements Serializable 
{
    /**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	protected int clientId;
    protected String name;
    protected String address;
	protected String phone;
	protected String email;
    /**
     * Default constructor.
     */
    protected ClientInformation() {
        this.clientId = 0;
        this.name = "";
		this.address = "";
		this.phone = "";
		this.email = "";
    }

    /**
     * Constructor initializes a user object with the provided values.
     * @param id
     * @param name
	 * @param address
	 * @param phone
	 * @param email
     */
    public ClientInformation(int clientId, String name, String address, 
							 String phone, String email) {
        this.clientId = clientId;
        this.name = name;
		this.address = address;
		this.phone = phone;
		this.email = email;
    }

    /**
     * Get the client's name.
     * @return name
     */
    public String getName() {
        return name;
    }

    /**
     * Set the client's name.
     * @param name
     */
    public void setName(String name) {
        this.name = name;
    }

    /**
     * Get the client's ID.
     * @return clientId
     */
    public int getId() {
        return clientId;
    }

    /**
     * Set the client's ID.
     * @param clientId
     */
    public void setId(int clientId) {
        this.clientId = clientId;
    }

    /**
     * Get the client's address.
     * @return address
     */
    public String getAddress() {
        return address;
    }

    /**
     * Set the client's address.
     * @param address
     */
    public void setAddress(String address) {
        this.address = address;
    }
    
	/**
     * Get the client's phone number.
     * @return phone
     */
    public String getPhone() {
        return phone;
    }

    /**
     * Set the client's phone number.
     * @param phone
     */
    public void setPhone(String phone) {
        this.phone = phone;
    }
    
	/**
     * Get the client's email.
     * @return email
     */
    public String getEmail() {
        return email;
    }

    /**
     * Set the client's email.
     * @param email
     */
    public void setEmail(String email) {
        this.email = email;
    }
}

