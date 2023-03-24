package ca.ubc.cs304.delegates;

import java.util.Date;

import ca.ubc.cs304.model.JobPostsModel;

/**
 * 
 *
 */
public interface EmployerDelegate {
	// public void databaseSetup();
	
	// view all jobs
	// public void showAllJobs();
	// view all posted jobs
	public void showPostedJobs();

	public void deleteJob(int jobID);

	public void insertJob(JobPostsModel jpModel);
	
	public void updateJob(int jobID, String industry, String jobName, Date postDate, Date endDate);
	
	public void findApplicationEmailToJob(int jobID);
	// find the jobID of the job with n applications
	public void findJobWithNApplications(int n);
	// should we pass in the employer's email?
	public void findEmployeesApplyingAll();

	public void EmployerFinished();
}
