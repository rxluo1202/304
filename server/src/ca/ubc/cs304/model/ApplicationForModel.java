package ca.ubc.cs304.model;

public class ApplicationForModel {
    public final int appID;
    public final String intro;
    public final int jobID;

    public ApplicationForModel(int appID, String intro, int jobID) {
		this.appID = appID;
		this.intro = intro;
		this.jobID = jobID;
	}

    public int getAppID() {
        return appID;
    }

    public String getText() {
        return intro;
    }

    public int getEmail() {
        return jobID;
    }
}
