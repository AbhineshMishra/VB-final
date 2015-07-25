function validateForm() {
var uname = document.customer_reg.user_name;
        //alert("Please provide Your Name "+uname.value);
        //return false;

	if (document.customer_reg.user_name.value == "") {
        	alert("Please provide Your Name");
        	return false;
	} else if (document.customer_reg.user_dob.value == "") {
        	alert("Please provide your Date of Birth");
        	return false;
	} else if (document.customer_reg.user_sex.value == "") {
        	alert("Please provide your Gender details");
        	return false;
	} else if (document.customer_reg.user_hour.value == "0") {
		alert("Please provide your Birth Hour");
                return false;
	} else if (document.customer_reg.user_minute.value == "0") {
                alert("Please provide your Birth Minute");
                return false;
	} else if (document.customer_reg.user_second.value == "0") {
                alert("Please provide your Birth Second");
                return false;
        } else if (document.customer_reg.user_address.value == "") {
                alert("Please provide your Address");
                return false;
	} else if (document.customer_reg.user_pob.value == "") {
                alert("Please provide your Place of Birth");
                return false;
        }

	if (document.customer_reg.spouse_name.value != "" || document.customer_reg.spouse_email.value !="") {
		if (document.customer_reg.spouse_name.value == "") {
                        alert("Please provide your Spouse's Name");
                        return false;
                } else if (document.customer_reg.spouse_dob.value == "") {
                	alert("Please provide your Spouse's Date of Birth");
                	return false;
        	} else if (document.customer_reg.spouse_sex.value == "") {
                	alert("Please provide your Spouse's Gender details");
                	return false;
        	} else if (document.customer_reg.spouse_hour.value == "0") {
                	alert("Please provide your Spouse's Birth Hour");
                	return false;
       		} else if (document.customer_reg.spouse_minute.value == "0") {
                	alert("Please provide your Spouse's Birth Minute");
                	return false;
        	} else if (document.customer_reg.spouse_second.value == "0") {
                	alert("Please provide your Spouse's Birth Second");
                	return false;
        	} else if (document.customer_reg.spouse_pob.value == "") {
                	alert("Please provide your Spouse's Place of Birth");
                	return false;
        	} else if (document.customer_reg.spouse_email.value == "") {
                        alert("Please provide your Spouse's Email Address");
                        return false;
                } else if (document.customer_reg.spouse_address.value == "") {
                        alert("Please provide your Spouse's Address");
                        return false;
                }
	}

        if (document.customer_reg.child1_name.value != "" || document.customer_reg.child1_email.value !="") {
		if (document.customer_reg.child1_name.value == "") {
                        alert("Please provide your Child's Name");
                        return false;		
		} else if (document.customer_reg.child1_dob.value == "") {
                        alert("Please provide your Child's Date of Birth");
                        return false;
                } else if (document.customer_reg.child1_sex.value == "") {
                        alert("Please provide your Child's Gender details");
                        return false;
                } else if (document.customer_reg.child1_hour.value == "0") {
                        alert("Please provide your child1's Birth Hour");
                        return false;
                } else if (document.customer_reg.child1_minute.value == "0") {
                        alert("Please provide your Child's Birth Minute");
                        return false;
                } else if (document.customer_reg.child1_second.value == "0") {
                        alert("Please provide your Child's Birth Second");
                        return false;
                } else if (document.customer_reg.child1_pob.value == "") {
                        alert("Please provide your Child's Place of Birth");
                        return false;
                } else if (document.customer_reg.child1_email.value == "") {
                        alert("Please provide your Child's Email address");
                        return false;
                } else if (document.customer_reg.child1_address.value == "") {
                        alert("Please provide your Child's Address");
                        return false;
		}
        }

        if (document.customer_reg.child2_name.value != "" || document.customer_reg.child2_email.value !="") {
                if (document.customer_reg.child2_name.value == "") {
                        alert("Please provide your Child's Name");
                        return false;
                } else if (document.customer_reg.child2_dob.value == "") {
                        alert("Please provide your Child's Date of Birth");
                        return false;
                } else if (document.customer_reg.child2_sex.value == "") {
                        alert("Please provide your Child's Gender details");
                        return false;
                } else if (document.customer_reg.child2_hour.value == "0") {
                        alert("Please provide your child2's Birth Hour");
                        return false;
                } else if (document.customer_reg.child2_minute.value == "0") {
                        alert("Please provide your Child's Birth Minute");
                        return false;
                } else if (document.customer_reg.child2_second.value == "0") {
                        alert("Please provide your Child's Birth Second");
                        return false;
                } else if (document.customer_reg.child2_pob.value == "") {
                        alert("Please provide your Child's Place of Birth");
                        return false;
                } else if (document.customer_reg.child2_email.value == "") {
                        alert("Please provide your Child's Email address");
                        return false;
                } else if (document.customer_reg.child2_address.value == "") {
                        alert("Please provide your Child's Address");
                        return false;
                }
        }

        if (document.customer_reg.mother_name.value != "" || document.customer_reg.mother_email.value !="") {
                if (document.customer_reg.mother_name.value == "") {
                        alert("Please provide your Mother's Name");
                        return false;
                } else if (document.customer_reg.mother_dob.value == "") {
                        alert("Please provide your Mother's Date of Birth");
                        return false;
                } else if (document.customer_reg.mother_sex.value == "") {
                        alert("Please provide your Mother's Gender details");
                        return false;
                } else if (document.customer_reg.mother_hour.value == "0") {
                        alert("Please provide your mother's Birth Hour");
                        return false;
                } else if (document.customer_reg.mother_minute.value == "0") {
                        alert("Please provide your Mother's Birth Minute");
                        return false;
                } else if (document.customer_reg.mother_second.value == "0") {
                        alert("Please provide your Mother's Birth Second");
                        return false;
                } else if (document.customer_reg.mother_pob.value == "") {
                        alert("Please provide your Mother's Place of Birth");
                        return false;
                } else if (document.customer_reg.mother_email.value == "") {
                        alert("Please provide your Mother's Email address");
                        return false;
                } else if (document.customer_reg.mother_address.value == "") {
                        alert("Please provide your Mother's Address");
                        return false;
                }
        }

        if (document.customer_reg.father_name.value != "" || document.customer_reg.father_email.value !="") {
                if (document.customer_reg.father_name.value == "") {
                        alert("Please provide your Father's Name");
                        return false;
                } else if (document.customer_reg.father_dob.value == "") {
                        alert("Please provide your Father's Date of Birth");
                        return false;
                } else if (document.customer_reg.father_sex.value == "") {
                        alert("Please provide your Father's Gender details");
                        return false;
                } else if (document.customer_reg.father_hour.value == "0") {
                        alert("Please provide your Father's Birth Hour");
                        return false;
                } else if (document.customer_reg.father_minute.value == "0") {
                        alert("Please provide your Father's Birth Minute");
                        return false;
                } else if (document.customer_reg.father_second.value == "0") {
                        alert("Please provide your Father's Birth Second");
                        return false;
                } else if (document.customer_reg.father_pob.value == "") {
                        alert("Please provide your Father's Place of Birth");
                        return false;
                } else if (document.customer_reg.father_email.value == "") {
                        alert("Please provide your Father's Email address");
                        return false;
                } else if (document.customer_reg.father_address.value == "") {
                        alert("Please provide your Father's Address");
                        return false;
                }
        }

        if (document.customer_reg.anyother1_name.value != "" || document.customer_reg.anyother1_email.value !="") {
                if (document.customer_reg.anyother1_name.value == "") {
                        alert("Please provide your " +document.customer_reg.anyother1_relationship.value+"'s Name");
                        return false;
                } else if (document.customer_reg.anyother1_dob.value == "") {
                        alert("Please provide your "+document.customer_reg.anyother1_relationship.value+"'s Date of Birth");
                        return false;
                } else if (document.customer_reg.anyother1_sex.value == "") {
                        alert("Please provide your "+document.customer_reg.anyother1_relationship.value+"'s Gender details");
                        return false;
                } else if (document.customer_reg.anyother1_hour.value == "0") {
                        alert("Please provide your "+document.customer_reg.anyother1_relationship.value+"'s Birth Hour");
                        return false;
                } else if (document.customer_reg.anyother1_minute.value == "0") {
                        alert("Please provide your "+document.customer_reg.anyother1_relationship.value+"'s Birth Minute");
                        return false;
                } else if (document.customer_reg.anyother1_second.value == "0") {
                        alert("Please provide your "+document.customer_reg.anyother1_relationship.value+"'s Birth Second");
                        return false;
                } else if (document.customer_reg.anyother1_pob.value == "") {
                        alert("Please provide your "+document.customer_reg.anyother1_relationship.value+"'s Place of Birth");
                        return false;
                } else if (document.customer_reg.anyother1_email.value == "") {
                        alert("Please provide your "+document.customer_reg.anyother1_relationship.value+"'s Email address");
                        return false;
                } else if (document.customer_reg.anyother1_address.value == "") {
                        alert("Please provide your "+document.customer_reg.anyother1_relationship.value+"'s Address");
                        return false;
                }
        }

        if (document.customer_reg.anyother2_name.value != "" || document.customer_reg.anyother2_email.value !="") {
                if (document.customer_reg.anyother2_name.value == "") {
                        alert("Please provide your " +document.customer_reg.anyother2_relationship.value+"'s Name");
                        return false;
                } else if (document.customer_reg.anyother2_dob.value == "") {
                        alert("Please provide your "+document.customer_reg.anyother2_relationship.value+"'s Date of Birth");
                        return false;
                } else if (document.customer_reg.anyother2_sex.value == "") {
                        alert("Please provide your "+document.customer_reg.anyother2_relationship.value+"'s Gender details");
                        return false;
                } else if (document.customer_reg.anyother2_hour.value == "0") {
                        alert("Please provide your "+document.customer_reg.anyother2_relationship.value+"'s Birth Hour");
                        return false;
                } else if (document.customer_reg.anyother2_minute.value == "0") {
                        alert("Please provide your "+document.customer_reg.anyother2_relationship.value+"'s Birth Minute");
                        return false;
                } else if (document.customer_reg.anyother2_second.value == "0") {
                        alert("Please provide your "+document.customer_reg.anyother2_relationship.value+"'s Birth Second");
                        return false;
                } else if (document.customer_reg.anyother2_pob.value == "") {
                        alert("Please provide your "+document.customer_reg.anyother2_relationship.value+"'s Place of Birth");
                        return false;
                } else if (document.customer_reg.anyother2_email.value == "") {
                        alert("Please provide your "+document.customer_reg.anyother2_relationship.value+"'s Email address");
                        return false;
                } else if (document.customer_reg.anyother2_address.value == "") {
                        alert("Please provide your "+document.customer_reg.anyother2_relationship.value+"'s Address");
                        return false;
                }
        }

}


