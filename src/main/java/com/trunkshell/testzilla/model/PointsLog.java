package com.trunkshell.testzilla.model;

import java.io.Serializable;
import java.util.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;
import javax.persistence.Transient;

/**
 * 积分日志的Model.
 * @author Xie Haozhe
 */
@Entity
@Table(name = "tz_points_logs")
public class PointsLog implements Serializable {
	/**
	 * PointsLog的默认构造函数.
	 */
	public PointsLog() {}
	
	/**
	 * PointsLog的构造函数.
	 * @param user - 积分所授予的用户
	 * @param getTime - 积分所授予的时间
	 * @param pointsRule - 积分日志所对应的规则
	 * @param meta - 附加的元信息
	 */
	public PointsLog(User user, Date getTime, PointsRule pointsRule, String meta) {
		this.user = user;
		this.getTime = getTime;
		this.pointsRule = pointsRule;
		this.setMeta(meta);
	}
	
	/**
	 * PointsLog的构造函数(用于单元测试).
	 * @param pointsLogId - 积分日志的唯一标识符
	 * @param user - 积分所授予的用户
	 * @param getTime - 积分所授予的时间
	 * @param pointsRule - 积分日志所对应的规则
	 * @param meta - 附加的元信息
	 */
	public PointsLog(long pointsLogId, User user, Date getTime, PointsRule pointsRule, String meta) {
		this(user, getTime, pointsRule, meta);
		this.pointsLogId = pointsLogId;
	}
	
	/**
	 * PointsLog的构造函数(用于LeaderBoardDao).
	 * @param user - 用户
	 * @param totalReputation - 一段时间内用户获取的Reputation总和 
	 */
	public PointsLog(User user, long totalReputation) {
		this.user = user;
		this.totalReputation = totalReputation;
	}
	
	/**
	 * 获取积分日志的唯一标识符.
	 * @return 积分日志的唯一标识符
	 */
	public long getPointsLogId() {
		return pointsLogId;
	}

	/**
	 * 设置积分日志的唯一标识符.
	 * @param pointsLogId - 积分日志的唯一标识符
	 */
	public void setPointsLogId(long pointsLogId) {
		this.pointsLogId = pointsLogId;
	}
	
	/**
	 * 获取积分所授予的用户.
	 * @return 积分所授予的用户
	 */
	public User getUser() {
		return user;
	}

	/**
	 * 设置积分所授予的用户.
	 * @param user - 积分所授予的用户
	 */
	public void setUser(User user) {
		this.user = user;
	}

	/**
	 * 获取积分所授予的时间.
	 * @return 积分所授予的时间
	 */
	public Date getGetTime() {
		return getTime;
	}

	/**
	 * 设置积分所授予的时间.
	 * @param getTime - 积分所授予的时间
	 */
	public void setGetTime(Date getTime) {
		this.getTime = getTime;
	}

	/**
	 * 获取积分日志所对应的规则.
	 * @return 积分日志所对应的规则
	 */
	public PointsRule getPointsRule() {
		return pointsRule;
	}

	/**
	 * 设置积分日志所对应的规则.
	 * @param pointsRule - 积分日志所对应的规则
	 */
	public void setPointsRule(PointsRule pointsRule) {
		this.pointsRule = pointsRule;
	}
	
	/**
	 * 获取积分日志元信息.
	 * @return 积分日志元信息
	 */
	public String getMeta() {
		return meta;
	}

	/**
	 * 设置积分日志元信息.
	 * @param meta - 积分日志元信息
	 */
	public void setMeta(String meta) {
		this.meta = meta;
	}
	
	/**
	 * 获取一段时间内Reputation总和
	 * @return Reputation总和
	 */
	public long getTotalReputation() {
		return totalReputation;
	}

	/**
	 * 设置一段时间内Reputation总和
	 * @param totalReputation
	 */
	public void setTotalReputation(long totalReputation) {
		this.totalReputation = totalReputation;
	}


	/* (non-Javadoc)
	 * @see java.lang.Object#equals(java.lang.Object)
	 */
	@Override
	public boolean equals(Object o) {
		if ( !(o instanceof PointsLog) ) {
			return false;
		}
		return this.pointsLogId == ((PointsLog)o).pointsLogId; 
	}
	
	/* (non-Javadoc)
	 * @see java.lang.Object#toString()
	 */
	@Override
	public String toString() {
		return String.format("PointsLog: [ID=%s, User={%s}, Time=%s, PointsRule={%s}]", 
				new Object[] { pointsLogId, user, getTime, pointsRule });
	}

	/**
	 * 积分日志的唯一标识符.
	 */
	@Id
	@GeneratedValue
	@Column(name = "points_log_id")
	private long pointsLogId;
	
	/**
	 * 积分所授予的用户.
	 */
	@ManyToOne(targetEntity = User.class)
	@JoinColumn(name = "points_to_uid")
	private User user;
	
	/**
	 * 积分所授予的时间.
	 */
	@Column(name = "points_get_time")
	private Date getTime;
	
	/**
	 * 积分日志所对应的规则.
	 */
	@ManyToOne(targetEntity = PointsRule.class)
	@JoinColumn(name = "points_rule_id")
	private PointsRule pointsRule;
	
	/**
	 * 积分日志的元信息.
	 */
	@Column(name = "points_meta")
	private String meta;
	
	/**
	 * 某段时间的reputation总和，只在LeaderBoard中使用。
	 */
	@Transient
	private long totalReputation;
	
	/**
	 * 唯一的序列化标识符.
	 */
	private static final long serialVersionUID = 5436849064799082923L;
}
