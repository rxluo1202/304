package ca.ubc.cs304.delegates;

import ca.ubc.cs304.model.JobPostsModel;
import java.util.Date;

public interface UserDelegate {

    public void databaseSetup();
    // For all users
    public void showAllJobs();

    public void showJobsByIndustry(String industry);

    public void register(String email, String phone, String userName, String password);

    public void login(String email, String password);

    // For employers
	public void showPostedJobs();

	public void deleteJob(int jobID);

	public void insertJob(JobPostsModel jpModel);
	
	public void updateJob(int jobID, String industry, String jobName, Date postDate, Date endDate, String email);
	
	public void findApplicationEmailToJob(int jobID);
	// find the jobID of the job with n applications
	public void findJobWithNApplications(int n);
	// should we pass in the employer's email?
	public void findEmployeesApplyingAll();

	// For employees
    public void apply(int jobID, String userName, String email, String phone, String intro);

    public void UserFinished();
}
