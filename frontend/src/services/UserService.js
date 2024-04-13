import axios from "axios";
import { BASE_URL } from "../api/api";

const UserService = {
  async getAll(page) {
    return axios.get(`${BASE_URL}/users?page=${page}`);
  },

  async getUser(id) {
    return axios.get(`${BASE_URL}/users/${id}`);
  },

  async create(data) {
    return axios.post(`${BASE_URL}/users`, data);
  },

  async update(id, data) {
    return axios.put(`${BASE_URL}/users/${id}`, data);
  },

  async delete(id) {
    return axios.delete(`${BASE_URL}/users/${id}`);
  },
};

export default UserService;
