package ca.ubc.cs304.model;

public class ApplicationCompletesModel {
    public final int appID;
    public final String intro;
    public final String email;

    public ApplicationCompletesModel(int appID, String intro, String email) {
		this.appID = appID;
		this.intro = intro;
		this.email = email;
	}

    public int getAppID() {
        return appID;
    }

    public String getText() {
        return intro;
    }

    public String getEmail() {
        return email;
    }
}
