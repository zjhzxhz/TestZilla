package com.happystudio.testzilla.model;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.Table;

import com.fasterxml.jackson.annotation.JsonIgnore;

/**
 * 用户组的Model.
 * @author Xie Haozhe
 */
@Entity
@Table(name = "tz_user_groups")
public class UserGroup implements Serializable {
	/**
	 * UserGroup的默认构造函数.
	 */
	public UserGroup() { }
	
	/**
	 * UserGroup的构造函数.
	 * @param userGroupId - 用户组的唯一标识符
	 * @param userGroupSlug - 用户组的唯一英文简称
	 * @param userGroupName - 用户组名称
	 */
	public UserGroup(int userGroupId, String userGroupSlug, String userGroupName) {
		this.userGroupId = userGroupId;
		this.userGroupSlug = userGroupSlug;
		this.userGroupName = userGroupName;
	}
	
	/**
	 * 获取用户组唯一标识符.
	 * @return 用户组唯一标识符
	 */
	public int getUserGroupId() {
		return userGroupId;
	}

	/**
	 * 设置用户组唯一标识符.
	 * @param userGroupId - 用户组唯一标识符
	 */
	public void setUserGroupId(int userGroupId) {
		this.userGroupId = userGroupId;
	}

	/**
	 * 获取用户组唯一英文简称.
	 * @return 用户组唯一英文简称
	 */
	public String getUserGroupSlug() {
		return userGroupSlug;
	}

	/**
	 * 设置用户组唯一英文简称.
	 * @param userGroupSlug - 用户组唯一英文简称
	 */
	public void setUserGroupSlug(String userGroupSlug) {
		this.userGroupSlug = userGroupSlug;
	}

	/**
	 * 获取用户组名称.
	 * @return 用户组名称
	 */
	public String getUserGroupName() {
		return userGroupName;
	}

	/**
	 * 设置用户组名称.
	 * @param userGroupName - 用户组名称
	 */
	public void setUserGroupName(String userGroupName) {
		this.userGroupName = userGroupName;
	}
	
	/**
	 * 获取用户列表(用于1-N关联).
	 * @return 用户列表
	 */
	@JsonIgnore
	public List<User> getUsers() {
		return users;
	}

	/**
	 * 设置用户列表.
	 * @param users - 用户列表
	 */
	public void setUsers(List<User> users) {
		this.users = users;
	}
	
	/* (non-Javadoc)
	 * @see java.lang.Object#toString()
	 */
	@Override
	public String toString() {
		return String.format("UserGroup [Id=%d, Slug=%s, Name=%s]",
				new Object[] { userGroupId, userGroupSlug, userGroupName });
	}

	/**
	 * 用户组唯一标识符.
	 */
	@Id
	@GeneratedValue
	@Column(name = "user_group_id")
	private int userGroupId;

	/**
	 * 用户组唯一英文简称.
	 */
	@Column(name = "user_group_slug")
	private String userGroupSlug;

	/**
	 * 用户组名称.
	 */
	@Column(name = "user_group_name")
	private String userGroupName;
	
	/**
	 * 用户列表(以便1-N关联).
	 */
	@OneToMany(targetEntity = User.class, 
				fetch = FetchType.LAZY, mappedBy = "userGroup")
	private List<User> users = new ArrayList<User>();

	/**
	 * 唯一的序列化标识符.
	 */
	private static final long serialVersionUID = 7212442658596312800L;
}
