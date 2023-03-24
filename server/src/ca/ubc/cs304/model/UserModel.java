package ca.ubc.cs304.model;

/**
 * The intent for this class is to update/store information about a single user
 */
public class UserModel {
	private final String email;
	private final String password;
	private final String userName;	
	private final String phone;
	
	public UserModel(String email, String password, String userName, String phone) {
		this.email = email;
		this.password = password;
		this.userName = userName;
		this.phone = phone;
	}

	public String getEmail() {
		return email;
	}

	public String getPassword() {
		return password;
	}

	public String getUserName() {
		return userName;
	}

	public String getPhone() {
		return phone;
	}
}
