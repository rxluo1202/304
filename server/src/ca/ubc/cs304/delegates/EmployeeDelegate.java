package ca.ubc.cs304.delegates;

import java.util.Date;

import ca.ubc.cs304.model.JobPostsModel;

/**
 * 
 *
 */
public interface EmployeeDelegate {
	// public void databaseSetup();
	
	// view all jobs
	// public void showAllJobs();

	// apply for a job
	public void apply(int jobID, String userName, String email, String phone, String intro);

	public void EmployeeFinished();
}
