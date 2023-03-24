package ca.ubc.cs304.model;

import java.util.Date;

    // jobID INT, 
	// industry VARCHAR(10), 
	// jobName VARCHAR(20), 	
	// postDate DATE, 
	// endDate DATE, 
	// email VARCHAR(255) NOT NULL,

public class JobPostsModel {
    public final int jobID;
    public final String industry;
    public final String jobName;
    public final Date postDate;
    public final Date endDate;
    public final String email;
    
    public JobPostsModel(int jobID, String industry, String jobName, Date postDate, Date endDate, String email) {
        this.jobID = jobID;
        this.industry = industry;
        this.jobName = jobName;
        this.postDate = postDate;
        this.endDate = endDate;
        this.email = email;
    }

    public int getJobID() {
        return jobID;
    }

    public String industry() {
        return industry;
    }

    public String jobName() {
        return jobName;
    }

    public Date postDate() {
        return postDate;
    }

    public Date endDate() {
        return endDate;
    }

    public String email() {
        return email;
    }
}
